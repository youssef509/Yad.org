<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Routes For The Front-End (The WebSite)
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('frontend.index');
    Route::get('/about-us', [AboutController::class,'index'])->name('frontend.about-us');
    Route::get('/contact-us', [ContactController::class,'index'])->name('frontend.index');
});
