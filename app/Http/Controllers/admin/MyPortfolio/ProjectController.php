<?php

namespace App\Http\Controllers\admin\MyPortfolio;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use UploadImages;


    public function index()
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for Project model
        $query = Project::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $projects = $query->paginate($perPage);

        return view('admin.MyPortfolio.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.MyPortfolio.projects.create');
    }

    public function store(ProjectRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            // Upload the file and get the new filename
            $newLogoFilename = $this->uploadImagesOnServer('myPortfolio/projects', $request->file('image'));
            $validatedData['image'] = $newLogoFilename;
        }
        $project = Project::create($validatedData);
        MessageHelper::getSuccessMessage();
        return back();
    }
    public function edit(Project $project)
    {

        return view('admin.MyPortfolio.projects.edit', compact('project'));
    }
    public function update(ProjectRequest $request, Project $project)
    {
        $validatedData = $request->validated();
        $checkProject = Project::find($project->id);
        if ($request->hasFile('image')) {
            // Upload the file and get the new filename
            $this->deleteImagesOnServer('myPortfolio/projects', $checkProject->image);

            $newLogoFilename = $this->uploadImagesOnServer('myPortfolio/projects', $request->file('image'));
            $validatedData['image'] = $newLogoFilename;
            // Check if the project exists and delete the old image
        }
        $project->update($validatedData);
        MessageHelper::getUpdateMessage();
        return back();
    }

    public function destroy(Project $project)
    {
        $project->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {

        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);
        // Fetch the projects to be deleted
        $projects = Project::whereIn("id", $delete_all)->get();
        // Delete the projects from the database
        Project::whereIn("id", $delete_all)->delete();
        // Display a delete message
        MessageHelper::getDeleteMessage();
        return back();
    }
}
