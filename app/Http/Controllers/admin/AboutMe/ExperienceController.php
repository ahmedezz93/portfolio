<?php

namespace App\Http\Controllers\admin\AboutMe;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    use UploadImages;


    public function index()
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for Experience model
        $query = Experience::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('job_title', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $experiences = $query->paginate($perPage);

        return view('admin.aboutMe.experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.aboutMe.experiences.create');
    }

    public function store(ExperienceRequest $request)
    {
        $validatedData = $request->validated();


        $experience = Experience::create($validatedData);


        MessageHelper::getSuccessMessage();
        return back();
    }
    // public function show(Experience $experience)
    // {
    //     return view('experiences.show', compact('experience'));
    // }

    public function edit(Experience $experience)
    {

        return view('admin.aboutMe.experiences.edit', compact('experience'));
    }
    public function update(ExperienceRequest $request, Experience $experience)
    {
        $validatedData = $request->validated();



        $experience->update($validatedData);
        MessageHelper::getUpdateMessage();
        return back();
     }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {

        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Fetch the experiences to be deleted
        $experiences = Experience::whereIn("id", $delete_all)->get();

        // Delete the experiences from the database
        Experience::whereIn("id", $delete_all)->delete();

        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }

}
