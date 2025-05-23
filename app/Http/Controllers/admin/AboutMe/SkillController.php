<?php

namespace App\Http\Controllers\admin\AboutMe;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    use UploadImages;


    public function index()
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for Skill model
        $query = Skill::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $skills = $query->paginate($perPage);

        return view('admin.aboutMe.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.aboutMe.skills.create');
    }

    public function store(SkillRequest $request)
    {
        $validatedData = $request->validated();


        $skill = Skill::create($validatedData);


        MessageHelper::getSuccessMessage();
        return back();
    }
    // public function show(Skill $skill)
    // {
    //     return view('skills.show', compact('skill'));
    // }

    public function edit(Skill $skill)
    {

        return view('admin.aboutMe.skills.edit', compact('skill'));
    }
    public function update(SkillRequest $request, Skill $skill)
    {
        $validatedData = $request->validated();



        $skill->update($validatedData);
        MessageHelper::getUpdateMessage();
        return back();
     }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {

        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Fetch the skills to be deleted
        $skills = Skill::whereIn("id", $delete_all)->get();

        // Delete the skills from the database
        Skill::whereIn("id", $delete_all)->delete();

        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }

}
