<?php

use Illuminate\Support\Facades\Route;


// Routes For The Front-End
    Route::get('/', function () {
    return view('welcome');
    });
    Route::get('/home', function () {
      return view('frontend.home');
    });
    Route::get('/index', function () {
    return view('frontend.index');
    });
    Route::get('/about-us', function () {
    return view('frontend.about-us');
    });
    Route::get('/contact-us', function () {
    return view('frontend.contact-us');
    });

// Routes For The Back-End (Admin Panel)
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('backend.index');
        });
        Route::get('/test', function () {
            return view('backend.test');
        });
    });
