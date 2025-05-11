<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsRequest;
use App\Models\Service;
use App\Models\Setting;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    use UploadImages;
    public function create()
    {
        $settings = Setting::first();
        return view('admin.settings.create', compact('settings'));
    }

    public function store(SettingsRequest $request)
    {

        $validatedData = $request->validated();
        $checkSettings = Setting::first();
        $data = $request->except('logo', 'header_icon', 'footer_icon', 'video');

        if ($request->hasFile('logo')) {
            // Upload the file and get the new filename
            $newLogoFilename = $this->uploadImagesOnServer('settings', $request->file('logo'));
            $data['logo'] = $newLogoFilename;

            if ($checkSettings && $checkSettings->logo != $newLogoFilename) {
                $this->deleteImagesOnServer('settings', $checkSettings->logo);
            }
        }

        if ($request->hasFile('header_icon')) {
            // Upload the file and get the new filename
            $newHeaderIconFilename = $this->uploadImagesOnServer('settings', $request->file('header_icon'));
            $data['header_icon'] = $newHeaderIconFilename;

            if ($checkSettings && $checkSettings->header_icon != $newHeaderIconFilename) {
                $this->deleteImagesOnServer('settings', $checkSettings->header_icon);
            }
        }

        if ($request->hasFile('footer_icon')) {
            // Upload the file and get the new filename
            $newFooterIconFilename = $this->uploadImagesOnServer('settings', $request->file('footer_icon'));
            $data['footer_icon'] = $newFooterIconFilename;

            if ($checkSettings && $checkSettings->footer_icon != $newFooterIconFilename) {
                $this->deleteImagesOnServer('settings', $checkSettings->footer_icon);
            }
        }

        // if ($request->hasFile('video')) {
        //     // Upload the file and get the new filename
        //     $newVideoFilename = $this->uploadImagesOnServer('settings', $request->file('video'));
        //     $data['video'] = $newVideoFilename;

        //     if ($checkSettings && $checkSettings->video != $newVideoFilename) {
        //         $this->deleteImagesOnServer('settings', $checkSettings->video);
        //     }
        // }
        $data['name'] = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $data['location'] = ['ar' => $request->location_ar, 'en' => $request->location_en];
        $data['primary_color'] = $request->primary_color;
        $data['secondary_color'] = $request->secondary_color;
        $data['background_color'] = $request->background_color;
        Setting::updateOrCreate([], $data);
        MessageHelper::getSuccessMessage();
        return back();
    }
}
