<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function project(){
        return view('project');
    }
    public function service(){
        return view('service');
    }
    public function projects_company(){
        return view('projects_company');
    }
    public function company(){
        return view('company');
    }
    public function contact(){
        return view('contact');
    }
}
