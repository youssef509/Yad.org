<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CausesController extends Controller
{
    public function index()
    {
        return view('frontend.causes');
    }
}
