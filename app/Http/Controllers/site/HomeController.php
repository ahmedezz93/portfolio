<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Achievement;
use App\Models\Article;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Faq;
use App\Models\Home;
use App\Models\PersonalInfo;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $personalInfo=PersonalInfo::first();
        $experiences=Experience::get();
        $educations=Education::get();
        $skills=Skill::get();
        $achievement=Achievement::first();
        return view('site.home',compact('personalInfo','experiences','educations','skills','achievement'));
    }
}
