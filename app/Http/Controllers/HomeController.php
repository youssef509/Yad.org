<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $SliderFromDB = Slider::all();
        return view('frontend.index', ['sliders'=> $SliderFromDB]);
    }
}
