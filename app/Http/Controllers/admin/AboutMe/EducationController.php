<?php

namespace App\Http\Controllers\admin\AboutMe;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\EducationRequest;
use App\Models\Education;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    use UploadImages;


    public function index()
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for Education model
        $query = Education::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('degree', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $educations = $query->paginate($perPage);

        return view('admin.aboutMe.educations.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.aboutMe.educations.create');
    }

    public function store(EducationRequest $request)
    {
        $validatedData = $request->validated();


        $education = Education::create($validatedData);


        MessageHelper::getSuccessMessage();
        return back();
    }
    // public function show(Education $education)
    // {
    //     return view('educations.show', compact('education'));
    // }

    public function edit(Education $education)
    {

        return view('admin.aboutMe.educations.edit', compact('education'));
    }
    public function update(EducationRequest $request, Education $education)
    {
        $validatedData = $request->validated();



        $education->update($validatedData);
        MessageHelper::getUpdateMessage();
        return back();
     }

    public function destroy(Education $education)
    {
        $education->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {

        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Fetch the educations to be deleted
        $educations = Education::whereIn("id", $delete_all)->get();

        // Delete the educations from the database
        Education::whereIn("id", $delete_all)->delete();

        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }
}
