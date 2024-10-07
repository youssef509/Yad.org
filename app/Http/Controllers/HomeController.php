<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use App\Models\Slider;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $SliderFromDB = Slider::all();
        $HomeAboutFromDB = HomeAbout::all();
        return view('frontend.index', ['sliders'=> $SliderFromDB],['HomeAboutall'=> $HomeAboutFromDB]);
    }
}
