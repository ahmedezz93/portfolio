<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use App\Models\Faq;
use App\Models\Home;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {

        return view('site.home');
    }
}
