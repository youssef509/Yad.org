<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CauseDetailsController extends Controller
{
    public function index()
    {
        return view('frontend.cause-details');
    }
}
