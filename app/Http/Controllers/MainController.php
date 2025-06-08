<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Countdown;
use App\Models\EventSchedule;
use App\Models\Feature;
use App\Models\Speaker;
use App\Models\Stat;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $banners = Banner::all();
        $about = About::first();
        $countdown = Countdown::first();
        $features = Feature::orderBy('created_at', 'desc')->take(4)->get();
        $events = EventSchedule::orderBy('date')->get();
        $stats = Stat::orderBy('created_at')->take(3)->get();
        $speakers = Speaker::take(3)->get();

        return view('index', compact('banners', 'about', 'countdown', 'features', 'events', 'stats', 'speakers'));
    }

    public function show(Request $request)
    {
        $banners = Banner::all()->toArray();
        $about = About::first()->toArray();

        return view('event', compact('banners', 'about'));
    }
}
