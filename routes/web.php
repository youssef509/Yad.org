<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Routes For The Back-End (Admin Panel)
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('backend.index');
    Route::get('/test', [AdminController::class, 'test'])->name('backend.test');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// Routes For The Front-End
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
