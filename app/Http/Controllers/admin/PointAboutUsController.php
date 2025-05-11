<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\pointAboutUsRequest;
use App\Models\About;
use App\Models\PointAboutUs;
use Illuminate\Http\Request;

class PointAboutUsController extends Controller
{
    public function index()
    {

        $about=About::first();
        $defaultPerPage = 2;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for PointAboutUs model
        $query = PointAboutUs::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('title', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $points = $query->where('about_id',$about->id)->paginate($perPage);

        return view('admin.pointAboutUs.index', compact('points'));
    }

    public function create()
    {
        return view('admin.pointAboutUs.create');
    }

    public function store(PointAboutUsRequest $request)
    {
        $about = About::first();
        $validatedData = $request->validated();
        if (!$about) {
            MessageHelper::getDeleteMessage('No About record found. Please create an About record first');
            return back();
        }
        $validatedData['about_id'] = $about->id;
        PointAboutUs::create($validatedData);
        MessageHelper::getSuccessMessage();
        return back();
    }
        public function edit($id)
    {
        $point=PointAboutUs::findOrFail($id);
        return view('admin.pointAboutUs.edit', compact('point'));
    }
    public function update(PointAboutUsRequest $request,$id)
    {
        $point=PointAboutUs::findOrFail($id);

        $validatedData = $request->validated();
        $point->update($validatedData);
        MessageHelper::getUpdateMessage();
        return back();
    }

    public function destroy(PointAboutUs $point)
    {
        $point->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {
        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);
        // Fetch the pointAboutUs to be deleted
        $pointAboutUs = PointAboutUs::whereIn("id", $delete_all)->get();
        // Delete the pointAboutUs from the database
        PointAboutUs::whereIn("id", $delete_all)->delete();
        // Display a delete message
        MessageHelper::getDeleteMessage();
        return back();
    }
}
