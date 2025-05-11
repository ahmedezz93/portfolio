<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Models\Image;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use UploadImages;

    public function create()
    {
        $about = About::first();
        return view('admin.about.create', compact('about'));
    }

    public function store(AboutRequest $request)
    {
        $validatedData = $request->validated();
        $data = $request->except(['image']);
        $data['title'] = [
            'ar' => $request->title_ar,
            'en' => $request->title_en,
        ];
        $data['description'] = [
            'ar' => $request->description_ar,
            'en' => $request->description_en,
        ];
        $about = About::first();

        if (!empty($about)) {


            if ($request->hasFile('image')) {
                $newFile = $request->image;
                $this->deleteImagesOnServer('about', $about->image);
                $newImageFilenames = $this->uploadImagesOnServer('about', $newFile, 'upload_images');
                $data['image'] = $newImageFilenames;

            }

        } else {
            if ($request->hasFile('image')) {
                $newFile = $request->image;
                // $this->deleteImagesOnServer('about', $about->image);

                $newImageFilenames = $this->uploadImagesOnServer('about', $newFile, 'upload_images');
                $data['image'] = $newImageFilenames;
            }

            $about = About::create($data);

        }
        About::updateOrCreate([], $data);
        MessageHelper::getSuccessMessage();
        return back();
    }

    public function destroy($id)
    {
        try {
            // العثور على السجل أو رمي استثناء
            $about = About::findOrFail($id);
            // حذف الصور المرتبطة
            if ($about->images && $about->images->isNotEmpty()) {
                foreach ($about->images as $image) {
                    $this->deleteImagesOnServer('about', $image->name);
                    $image->delete(); // حذف السجل من جدول الصور
                }
            }
            // حذف الصورة الثانية إذا كانت موجودة
            if ($about->image_second_part) {
                $this->deleteImagesOnServer('about', $about->image_second_part);
            }
            // حذف السجل الأساسي
            $about->delete();
            // رسالة نجاح
            MessageHelper::getDeleteMessage();
            return back();
        } catch (\Exception $e) {
            // التعامل مع الأخطاء وإظهار الرسالة
            return back()->with('error', 'Failed to delete the record. ' . $e->getMessage());
        }
    }
}
