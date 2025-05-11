<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
public function index(){
    $team=Team::all();
    $setting=Setting::first();
    return view('site.our-team.index',compact('team','setting'));
}

public function singleTeam($id){
    $singleTeam=Team::findOrFail($id);
    return view('site.our-team.single-team',compact('singleTeam'));
}

}
