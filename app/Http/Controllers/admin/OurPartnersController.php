<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\PartnerRequest;
use App\Models\Partner;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class OurPartnersController extends Controller
{
    use UploadImages;
    public function index()
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for Partner model
        $query = Partner::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $partners = $query->paginate($perPage);

        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(PartnerRequest $request)
    {
        $validatedData = $request->validated();
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            $newLogoFilename =  $this->uploadImagesOnServer('partners', $newFile, 'upload_images');
            $data['image'] = $newLogoFilename;
        }
        Partner::create($data);
        MessageHelper::getSuccessMessage();
        return back();
    }
    public function show(Partner $partner)
    {
        return view('partners.show', compact('partner'));
    }

    public function edit($id)
    {
        $partner=Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));
    }
    public function update(Request $request, $id)
    {
        $partner=Partner::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            // Delete image from server
            $this->deleteImagesOnServer('partners', $partner->image, 'upload_images');
            // Upload new image to server and database
            $newLogoFilename =  $this->uploadImagesOnServer('partners', $newFile, 'upload_images');
            $data['image'] = $newLogoFilename;
        }

        $partner->update($data);

        MessageHelper::getSuccessMessage();
        return back();
    }

    public function destroy($id)
    {
        $partner=Partner::findOrFail($id);
        $partner->delete();
        $this->deleteImagesOnServer('partners', $partner->image);
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {
        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Fetch the partners to be deleted
        $partners = Partner::whereIn("id", $delete_all)->get();

        // Delete images for each partner
        foreach ($partners as $partner) {
            $this->deleteImagesOnServer('partners', $partner->image);
        }

        // Delete the partners from the database
        Partner::whereIn("id", $delete_all)->delete();

        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }
}
