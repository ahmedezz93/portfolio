<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function index($id){

        $services=Service::all();
        $service=Service::findOrFail($id);
        $setting=Setting::first();
        return view('site.service-details.index',compact('services','service','setting'));
    }
}
