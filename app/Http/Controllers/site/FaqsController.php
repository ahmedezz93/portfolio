<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqSection;
use App\Models\Setting;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $setting=Setting::first();
        $sections=FaqSection::with('faqs')->get();
        return view('site.faqs.index',compact('setting','sections'));
    }
}
