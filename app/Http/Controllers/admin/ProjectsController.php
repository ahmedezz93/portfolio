<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class ProjectsController extends Controller
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

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(ProjectRequest $request)
    {
        $validatedData = $request->validated();

        $data = $request->except(['image']);

        $data['name'] = [
            'ar' => $request->input('name_ar'),
            'en' => $request->input('name_en'),
        ];
        $data['client'] = [
            'ar' => $request->input('client_ar'),
            'en' => $request->input('client_en'),
        ];
        $data['category'] = [
            'ar' => $request->input('category_ar'),
            'en' => $request->input('category_en'),
        ];
        $data['location'] = [
            'ar' => $request->input('location_ar'),
            'en' => $request->input('location_en'),
        ];
        $data['description'] = [
            'ar' => $request->input('description_ar'),
            'en' => $request->input('description_en'),
        ];

        // التحقق من وجود الصورة ورفعها
        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            $newLogoFilename = $this->uploadImagesOnServer('projects', $newFile, 'upload_images');
            $data['image'] = $newLogoFilename;
        }

        $project = Project::create($data);


        MessageHelper::getSuccessMessage();
        return back();
    }
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {

        return view('admin.projects.edit', compact('project'));
    }
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'name_ar' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'client_ar' => 'nullable|string|max:255',
            'client_en' => 'nullable|string|max:255',
            'category_ar' => 'nullable|string|max:255',
            'category_en' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'location_ar' => 'nullable|string|max:255',
            'location_en' => 'nullable|string|max:255',
        ]);

        $data = $request->except('image');

        // تحديث الحقول القابلة للترجمة
        $data['name'] = [
            'ar' => $request->input('name_ar'),
            'en' => $request->input('name_en'),
        ];
        $data['client'] = [
            'ar' => $request->input('client_ar'),
            'en' => $request->input('client_en'),
        ];
        $data['category'] = [
            'ar' => $request->input('category_ar'),
            'en' => $request->input('category_en'),
        ];
        $data['location'] = [
            'ar' => $request->input('location_ar'),
            'en' => $request->input('location_en'),
        ];
        $data['description'] = [
            'ar' => $request->input('description_ar'),
            'en' => $request->input('description_en'),
        ];

        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            $this->deleteImagesOnServer('projects', $project->image, 'upload_images');
            $newLogoFilename = $this->uploadImagesOnServer('projects', $newFile, 'upload_images');
            $data['image'] = $newLogoFilename;
        }
        $project->update($data);
        MessageHelper::getUpdateMessage();
        return back();
     }

    public function destroy(Project $project)
    {
        $project->delete();
        $this->deleteImagesOnServer('projects', $project->image);
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

        // Delete images for each project
        foreach ($projects as $project) {
            $this->deleteImagesOnServer('projects', $project->image);
        }

        // Delete the projects from the database
        Project::whereIn("id", $delete_all)->delete();

        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }


}
