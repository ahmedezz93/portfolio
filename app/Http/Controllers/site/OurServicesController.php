<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Home;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    public function index(){
        $services=Service::all();
        $home = Home::first();
        $faqs=Faq::latest()->take(5)->get();
        return view('site.services.index',compact('services','faqs','home'));
    }


    public function  singleService($id){
        $service=Service::findOrFail($id);
        $services=Service::latest()->take(5)->get();
        $setting=Setting::first();
        $faqs=Faq::latest()->take(5)->get();
        return view('site.services.single_service',compact('service','faqs','services','setting'));

    }
}
