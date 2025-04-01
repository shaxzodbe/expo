<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $banners = Banner::all()->toArray();

        return view('index', compact('banners'));
    }
}
