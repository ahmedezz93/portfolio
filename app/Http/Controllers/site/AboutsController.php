<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Faq;
use App\Models\Home;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
public function index()
{

    $about=About::first();
    $team=Team::latest()->take(3)->get();
    $faqs=Faq::latest()->take(5)->get();
    $setting=Setting::First();
    $home = Home::first();
    return view('site.about_us.index',compact('about','team','faqs','setting','home'));
}

}
