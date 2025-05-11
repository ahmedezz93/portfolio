<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\HomeRequest;
use App\Models\Home;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class homeController extends Controller
{
    use UploadImages;
    public function create()
    {
        $home = Home::first();
        return view('admin.home.create', compact('home'));
    }

    public function updateOrCreate(HomeRequest $request)
    {

        $validatedData = $request->validated();
        $checkhome = Home::first();
        $data = $request->except('first_zone_image', 'second_zone_image','fourth_zone_image');

        if ($request->hasFile('first_zone_image')) {
            // Upload the file and get the new filename
            $newLogoFilename = $this->uploadImagesOnServer('home', $request->file('first_zone_image'));
            $data['first_zone_image'] = $newLogoFilename;

            if ($checkhome && $checkhome->first_zone_image != $newLogoFilename) {
                $this->deleteImagesOnServer('home', $checkhome->first_zone_image);
            }
        }

        if ($request->hasFile('fourth_zone_image')) {
            // Upload the file and get the new filename
            $newLogoFilename = $this->uploadImagesOnServer('home', $request->file('fourth_zone_image'));
            $data['fourth_zone_image'] = $newLogoFilename;

            if ($checkhome && $checkhome->fourth_zone_image != $newLogoFilename) {
                $this->deleteImagesOnServer('home', $checkhome->fourth_zone_image);
            }
        }

        if ($request->hasFile('second_zone_image')) {
            // Upload the file and get the new filename
            $newHeaderIconFilename = $this->uploadImagesOnServer('home', $request->file('second_zone_image'));
            $data['second_zone_image'] = $newHeaderIconFilename;

            if ($checkhome && $checkhome->second_zone_image != $newHeaderIconFilename) {
                $this->deleteImagesOnServer('home', $checkhome->second_zone_image);
            }
        }

        if ($request->hasFile('third_zone_image')) {
            // Upload the file and get the new filename
            $newFooterIconFilename = $this->uploadImagesOnServer('home', $request->file('third_zone_image'));
            $data['third_zone_image'] = $newFooterIconFilename;

            if ($checkhome && $checkhome->third_zone_image != $newFooterIconFilename) {
                $this->deleteImagesOnServer('home', $checkhome->third_zone_image);
            }
        }

        $data['first_zone_title'] = ['ar' => $request->first_zone_title_ar, 'en' => $request->first_zone_title_en];
        $data['first_zone_description'] = ['ar' => $request->first_zone_description_ar, 'en' => $request->first_zone_description_en];
        $data['second_zone_title'] = ['ar' => $request->second_zone_title_ar, 'en' => $request->second_zone_title_en];
        $data['second_zone_mini_description'] = ['ar' => $request->second_zone_mini_description_ar, 'en' => $request->second_zone_mini_description_en];
        $data['second_zone_item_1_description'] = ['ar' => $request->second_zone_item_1_description_ar, 'en' => $request->second_zone_item_1_description_en];
        $data['second_zone_item_2_description'] = ['ar' => $request->second_zone_item_2_description_ar, 'en' => $request->second_zone_item_2_description_en];
        $data['second_zone_item_3_description'] = ['ar' => $request->second_zone_item_3_description_ar, 'en' => $request->second_zone_item_3_description_en];
        $data['third_zone_title'] = ['ar' => $request->third_zone_title_ar, 'en' => $request->third_zone_title_en];
        $data['third_zone_mini_description'] = ['ar' => $request->third_zone_mini_description_ar, 'en' => $request->third_zone_mini_description_en];
        $data['third_zone_title_item_one'] = $request->third_zone_title_item_one;
        $data['third_zone_mini_description_item_one'] = ['ar' => $request->third_zone_mini_description_item_one_ar, 'en' => $request->third_zone_mini_description_item_one_en];
        $data['third_zone_title_item_two'] =  $request->third_zone_title_item_two;
        $data['third_zone_mini_description_item_two'] = ['ar' => $request->third_zone_mini_description_item_two_ar, 'en' => $request->third_zone_mini_description_item_two_en];
        $data['third_zone_title_item_three'] = $request->third_zone_title_item_three;
        $data['third_zone_mini_description_item_three'] = ['ar' => $request->third_zone_mini_description_item_three_ar, 'en' => $request->third_zone_mini_description_item_three_en];
        $data['third_zone_title_item_four'] = $request->third_zone_title_item_four;
        $data['third_zone_mini_description_item_four'] = ['ar' => $request->third_zone_mini_description_item_four_ar, 'en' => $request->third_zone_mini_description_item_four_en];
        $data['fourth_zone_title'] = ['ar' => $request->fourth_zone_title_ar, 'en' => $request->fourth_zone_title_en];
        $data['fourth_zone_description'] = ['ar' => $request->fourth_zone_description_ar, 'en' => $request->fourth_zone_description_en];

        Home::updateOrCreate([], $data);
        MessageHelper::getSuccessMessage();
        return back();
    }
}
