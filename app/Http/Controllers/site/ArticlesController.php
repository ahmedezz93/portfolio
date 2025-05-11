<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(6);
        return view('site.articles.index', compact('articles'));
    }

    public function singleArticle($id){
        $article=Article::findOrFail($id);
        $articles=Article::all();
        $setting=Setting::first();
        return view('site.articles.single-article',compact('articles','article','setting'));
       }

}
