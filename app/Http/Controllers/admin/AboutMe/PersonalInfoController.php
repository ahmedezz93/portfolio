<?php

namespace App\Http\Controllers\admin\AboutMe;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\personalInfoRequest;
use App\Models\PersonalInfo;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    use UploadImages;
    public function index()
    {
        $personalInfo = PersonalInfo::first();
        return view('admin.aboutMe.personalInfo.createOrUpdate', compact('personalInfo'));
    }

    public function createOrUpdate(personalInfoRequest $request)
    {
         $validatedData = $request->validated();
        $checkPersonalInfo = PersonalInfo::first();
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Upload the file and get the new filename
            $newLogoFilename = $this->uploadImagesOnServer('personalInfo', $request->file('image'));
            $data['image'] = $newLogoFilename;

            if ($checkPersonalInfo && $checkPersonalInfo->image != $newLogoFilename) {
                $this->deleteImagesOnServer('personalInfo', $checkPersonalInfo->image);
            }
        }
                if ($request->hasFile('cv')) {
            // Upload the file and get the new filename
            $newCvFilename = $this->uploadImagesOnServer('personalInfo', $request->file('cv'));
            $data['cv'] = $newCvFilename;

            if ($checkPersonalInfo && $checkPersonalInfo->cv != $newCvFilename) {
                $this->deleteImagesOnServer('personalInfo', $checkPersonalInfo->cv);
            }
        }


        PersonalInfo::updateOrCreate([], $data);
        MessageHelper::getSuccessMessage();
        return back();
    }

}
