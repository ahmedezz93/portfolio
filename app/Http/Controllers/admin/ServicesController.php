<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\serviceImage;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    use UploadImages;


    public function index()
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for Service model
        $query = Service::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $services = $query->paginate($perPage);

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(ServiceRequest $request)
    {
        $validatedData = $request->validated();

        $data = $request->except('image', 'images');

        // تأكد أن البيانات القابلة للترجمة تُخزن كمصفوفة
        $data['name'] = [
            'ar' => $request->input('name_ar', ''),
            'en' => $request->input('name_en', '')
        ];
        $data['description'] = [
            'ar' => $request->input('description_ar', ''),
            'en' => $request->input('description_en', '')
        ];
        $data['mini_description'] = [
            'ar' => $request->input('mini_description_ar', ''),
            'en' => $request->input('mini_description_en', '')
        ];

        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            $data['image'] = $this->uploadImagesOnServer('services', $newFile, 'upload_images');
        }

        $service = Service::create($data);

        if ($request->hasFile('images')) {
            $imageData = [];
            $uploadedFiles = $this->uploadMultiImages('service_images', $request->file('images'), 'upload_images');

            foreach ($uploadedFiles as $newImageFilename) {
                $imageData[] = [
                    'name' => $newImageFilename,
                    'service_id' => $service->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            ServiceImage::insert($imageData);
        }

        MessageHelper::getSuccessMessage();
        return back();
    }
        public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $validatedData = $request->validated();
        $data = $request->except('image', 'images');

        // التأكد من حفظ الحقول القابلة للترجمة كمصفوفات
        $data['name'] = [
            'ar' => $request->input('name_ar', $service->getTranslation('name', 'ar')),
            'en' => $request->input('name_en', $service->getTranslation('name', 'en'))
        ];
        $data['description'] = [
            'ar' => $request->input('description_ar', $service->getTranslation('description', 'ar')),
            'en' => $request->input('description_en', $service->getTranslation('description', 'en'))
        ];
        $data['mini_description'] = [
            'ar' => $request->input('mini_description_ar', $service->getTranslation('mini_description', 'ar')),
            'en' => $request->input('mini_description_en', $service->getTranslation('mini_description', 'en'))
        ];

        // تحديث الصورة الرئيسية إن وُجدت
        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            $this->deleteImagesOnServer('services', $service->image, 'upload_images');
            $data['image'] = $this->uploadImagesOnServer('services', $newFile, 'upload_images');
        }

        // تحديث صور الخدمة المتعددة
        if ($request->hasFile('images')) {
            // حذف الصور القديمة
            foreach ($service->serviceImages as $image) {
                $this->deleteImagesOnServer('service_images', $image->name, 'upload_images');
            }

            // تحميل الصور الجديدة
            $imageData = [];
            $uploadedFiles = $this->uploadMultiImages('service_images', $request->file('images'), 'upload_images');

            foreach ($uploadedFiles as $newImageFilename) {
                $imageData[] = [
                    'name' => $newImageFilename,
                    'service_id' => $service->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            // حذف الصور القديمة من قاعدة البيانات وإضافة الجديدة
            ServiceImage::where('service_id', $service->id)->delete();
            ServiceImage::insert($imageData);
        }

        // تحديث بيانات الخدمة
        $service->update($data);

        // رسالة نجاح
        MessageHelper::getSuccessMessage();
        return back();
    }

    public function destroy(Service $service)
    {
        if ($service->serviceImages->isNotEmpty()) {
            $imageNames = $service->serviceImages->pluck('name')->toArray();
            $this->deleteMultiImages('service_images', $imageNames);
        }

        $service->delete();
        $this->deleteImagesOnServer('services', $service->image);
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {
        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Fetch the services to be deleted
        $services = Service::whereIn("id", $delete_all)->get();

        // Delete images for each service
        foreach ($services as $service) {

            if ($service->serviceImages->isNotEmpty()) {
                $imageNames = $service->serviceImages->pluck('name')->toArray();
                $this->deleteMultiImages('service_images', $imageNames);
            }

            $this->deleteImagesOnServer('services', $service->image);
        }

        // Delete the services from the database
        Service::whereIn("id", $delete_all)->delete();
        // Display a delete message
        MessageHelper::getDeleteMessage();
        return back();
    }
}
