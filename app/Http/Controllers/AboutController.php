<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('site.about-us.index', compact('setting'));
    }
}
