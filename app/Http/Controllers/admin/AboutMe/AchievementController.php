<?php

namespace App\Http\Controllers\admin\AboutMe;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\AchievementRequest;
use App\Models\Achievement;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    use UploadImages;


    public function create()
    {
        $achievement = Achievement::first();
        return view('admin.aboutMe.achievements.createOrUpdate', compact('achievement'));
    }

    public function createOrUpdate(AchievementRequest $request)
    {
        $validatedData = $request->validated();
        Achievement::updateOrCreate([], $validatedData);
        MessageHelper::getSuccessMessage();
        return back();
    }
    public function show(Achievement $achievement)
    {
        return view('achievements.show', compact('achievement'));
    }

    public function edit(Achievement $achievement)
    {

        return view('admin.aboutMe.achievements.edit', compact('achievement'));
    }
    public function destroy(Achievement $achievement)
    {
        $achievement->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {

        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Fetch the achievements to be deleted
        $achievements = Achievement::whereIn("id", $delete_all)->get();

        // Delete the achievements from the database
        Achievement::whereIn("id", $delete_all)->delete();

        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }
}
