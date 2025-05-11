<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    use UploadImages;

    public function index()
    {
        $query = User::where('id', '!=', auth('web')->user()->id)
            ->where('type', '!=', 'superadmin')
            ->when(request()->has('name'), function ($query) {
                return $query->where('name', 'like', '%' . request('name') . '%');
            });
        $defaultPerPage = 5;

        // الحصول على قيمة per_page من الطلب أو استخدام القيمة الافتراضية
        $perPage = request()->get('per_page', $defaultPerPage);

        if (request()->has('search')) {
            $search = request('search');
            $query->where(function ($subQuery) use ($search) {
                $subQuery->Where('name', 'like', '%' . $search . '%');
            });
        }
        $users = $query->paginate($perPage);
        return view('admin.users.index', compact('users'));
    }






    public function store(Request $request)
    {
        $data =  $request->validate([
            'name_ar' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            $newLogoFilename =  $this->uploadImagesOnServer('users', $newFile, 'upload_images');
            $data['image'] = $newLogoFilename;
        }
        $data['name'] = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $user = User::create($data);
        MessageHelper::getSuccessMessage();
        return back();
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name_ar' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
        ]);
        $data = $request->except('password');
        if ($request->filled('password')) {
            $data['password']  = bcrypt($request->password);
        }
        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            // Delete image from server
            $this->deleteImagesOnServer('users', $user->image, 'upload_images');
            // Upload new image to server and database
            $newLogoFilename =  $this->uploadImagesOnServer('users', $newFile, 'upload_images');
            $data['image'] = $newLogoFilename;
        }
        $data['name'] = ['ar' => $request->name_ar, 'en' => $request->name_en];

        $user->update($data);

        MessageHelper::getUpdateMessage();
        return back();
    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }





    public function destroyAll(Request $request)
    {
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // الحصول على جميع العلامات التجارية التي سيتم حذفها
        $users = User::whereIn('id', $delete_all)->get();

        foreach ($users as $manager) {
            // حذف الصورة من السيرفر إذا كانت موجودة
            if ($manager->image) {
                $this->deleteImagesOnServer('users', $manager->image, 'upload_images');
            }
        }
        User::whereIn('id', $delete_all)->delete();
        MessageHelper::getDeleteMessage();
        return back();
    }
}
