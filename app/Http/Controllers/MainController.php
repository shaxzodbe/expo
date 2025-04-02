<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $banners = Banner::all()->toArray();
        $about = About::first()->toArray();

        return view('index', compact('banners', 'about'));
    }

    public function show(Request $request)
    {
        $banners = Banner::all()->toArray();
        $about = About::first()->toArray();

        return view('event', compact('banners', 'about'));
    }
}
