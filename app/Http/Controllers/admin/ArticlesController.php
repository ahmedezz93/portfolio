<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticlesRequest;
use App\Models\Article;
use App\Traits\UploadImages;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    use UploadImages;

    public function index()
    {
        $defaultPerPage = 10;
        $perPage = request()->get('per_page', $defaultPerPage);

        // Start building the query for Article model
        $query = Article::query();

        // Apply search filter if 'search' parameter is present
        if (request()->has('search')) {
            $search = request('search');
            $query->where('title', 'like', '%' . $search . '%');
        }

        // Paginate the filtered query based on perPage value
        $articles = $query->paginate($perPage);

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(ArticlesRequest $request)
    {
        $validatedData = $request->validated();

        $data = $request->except('image');

        // حفظ العنوان بلغتين
        $data['title'] = [
            'ar' => $request->input('title_ar', ''),
            'en' => $request->input('title_en', '')
        ];

        // حفظ الوصف بلغتين
        $data['description'] = [
            'ar' => $request->input('description_ar', ''),
            'en' => $request->input('description_en', '')
        ];

        // رفع الصورة إن وجدت
        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            $data['image'] = $this->uploadImagesOnServer('articles', $newFile, 'upload_images');
        }

        Article::create($data);

        MessageHelper::getSuccessMessage();
        return back();
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'title_ar' => 'nullable|string|max:255|required_without:title_en',
            'title_en' => 'nullable|string|max:255|required_without:title_ar',
            'description_ar' => 'required|string|required_without:description_en',
            'description_en' => 'required|string|required_without:description_ar',

        ]);

        $data = $request->except('image');

        $data['title'] = [
            'ar' => $request->input('title_ar', $article->getTranslation('title', 'ar')),
            'en' => $request->input('title_en', $article->getTranslation('title', 'en'))
        ];

        $data['description'] = [
            'ar' => $request->input('description_ar', $article->getTranslation('description', 'ar')),
            'en' => $request->input('description_en', $article->getTranslation('description', 'en'))
        ];

        if ($request->hasFile('image')) {
            $newFile = $request->file('image');
            $this->deleteImagesOnServer('articles', $article->image, 'upload_images');
            $data['image'] = $this->uploadImagesOnServer('articles', $newFile, 'upload_images');
        }
        $article->update($data);
        MessageHelper::getSuccessMessage();
        return back();
    }

    public function destroy($id)
    {
        $article=   Article::findOrFail($id);
        $article->delete();
        $this->deleteImagesOnServer('articles', $article->image);
        MessageHelper::getDeleteMessage();
        return back();
    }


    public function destroyAll(Request $request)
    {
        // Get the array of IDs to delete
        $delete = $request->delete_all_id;
        $delete_all = explode(',', $delete);

        // Fetch the articles to be deleted
        $articles = Article::whereIn("id", $delete_all)->get();

        // Delete images for each article
        foreach ($articles as $article) {
            $this->deleteImagesOnServer('articles', $article->image);
        }

        // Delete the articles from the database
        Article::whereIn("id", $delete_all)->delete();

        // Display a delete message
        MessageHelper::getDeleteMessage();

        return back();
    }
}
