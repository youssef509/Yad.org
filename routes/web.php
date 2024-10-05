<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\CauseDetailsController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;

// Routes For The Back-End (Admin Panel)
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('backend.index');
    Route::get('/test', [AdminController::class, 'test'])->name('backend.test');
    Route::get('/slider', [SliderController::class, 'index'])->name('backend.slider');
    Route::prefix('slider')->group(function() {
        Route::get('/', [SliderController::class, 'index'])->name('backend.slider');
        Route::post('/', [SliderController::class, 'store'])->name(name: 'admin.slider-store');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Routes For The Front-End (The WebSite)
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('frontend.index');
    Route::get('/about-us', [AboutController::class,'index'])->name('frontend.about-us');
    Route::get('/contact-us', [ContactController::class,'index'])->name('frontend.index');
    Route::get('/causes',[CausesController::class, 'index'])->name('frontend.casues');
    Route::get('/cause-details',[CauseDetailsController::class, 'index'])->name('frontend.casue-details');
});

