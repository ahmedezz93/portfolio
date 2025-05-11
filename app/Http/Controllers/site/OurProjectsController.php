<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class OurProjectsController extends Controller
{
public function index(){

    $projects=Project::all();

 return view('site.our-projects.index',compact('projects'));
}

public function projectDetails($id){

    $project=Project::findOrFail($id);
    $setting=Setting::first();
      $faqs=Faq::latest()->take(5)->get();
 return view('site.our-projects.project_details',compact('project','setting','faqs'));
}


}
