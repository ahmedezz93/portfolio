<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeamsRequest;
use App\Models\Team;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    use UploadImages;
    public function index()
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for Team model
        $query = Team::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $teams = $query->paginate($perPage);

        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(TeamsRequest $request)
    {
        $validatedData = $request->validated();

        $data = $request->except('image');

        // تخزين البيانات ككائن يحتوي على العربية والإنجليزية
        $data['name'] = [
            'ar' => $request->input('name_ar', ''),
            'en' => $request->input('name_en', '')
        ];
        $data['job_title'] = [
            'ar' => $request->input('job_title_ar', ''),
            'en' => $request->input('job_title_en', '')
        ];
        $data['details'] = [
            'ar' => $request->input('details_ar', ''),
            'en' => $request->input('details_en', '')
        ];

        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            $data['image'] = $this->uploadImagesOnServer('teams', $newFile, 'upload_images');
        }
        Team::create($data);
        MessageHelper::getSuccessMessage();
        return back();
    }
    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.teams.edit', compact('team'));
    }
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $validatedData = $request->validate([
            'name_ar' => 'nullable|string|max:255|required_without:name_en',
            'name_en' => 'nullable|string|max:255|required_without:name_ar',
            'email' => 'nullable|email|unique:teams,email,'.$id,
            'phone' => 'nullable|string|max:20',
            'experience' => 'nullable|numeric',
            'details_ar' => 'nullable|string',
            'details_en' => 'nullable|string',
            'job_title_ar' => 'nullable|string|max:255|required_without:job_title_en',
            'job_title_en' => 'nullable|string|max:255|required_without:job_title_ar',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'instagram_link' => 'nullable',
            'linkdin_link' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',

        ]);
        $data['name'] = [
            'ar' => $request->input('name_ar', ''),
            'en' => $request->input('name_en', '')
        ];
        $data['job_title'] = [
            'ar' => $request->input('job_title_ar', ''),
            'en' => $request->input('job_title_en', '')
        ];
        $data['details'] = [
            'ar' => $request->input('details_ar', ''),
            'en' => $request->input('details_en', '')
        ];
        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            // Delete image from server
            $this->deleteImagesOnServer('teams', $team->image, 'upload_images');
            // Upload new image to server and database
            $newLogoFilename =  $this->uploadImagesOnServer('teams', $newFile, 'upload_images');
            $data['image'] = $newLogoFilename;
        }
        $team->update($data);
        MessageHelper::getSuccessMessage();
        return back();
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        $this->deleteImagesOnServer('teams', $team->image);
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {
        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Fetch the teams to be deleted
        $teams = Team::whereIn("id", $delete_all)->get();

        // Delete images for each team
        foreach ($teams as $team) {
            $this->deleteImagesOnServer('teams', $team->image);
        }

        // Delete the teams from the database
        Team::whereIn("id", $delete_all)->delete();

        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }
}
