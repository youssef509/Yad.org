<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\CauseDetailsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\HomeAboutController;
use App\Http\Controllers\Admin\PartinersController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AboutQAsController;
use App\Http\Controllers\Admin\AdminCausesController;
use Illuminate\Support\Facades\Route;

// Routes For The Back-End (Admin Panel).
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('backend.index');
    Route::prefix('slider')->group(function() {
        Route::get('/', [SliderController::class, 'index'])->name('backend.slider');
        Route::post('/', [SliderController::class, 'store'])->name('admin.slider-store');
        Route::get('{slider}/edit', [SliderController::class, 'edit'])->name('admin.edit-slider');
        Route::put('{slider}/update', [SliderController::class, 'update'])->name('admin.slider-update');
        Route::delete('{slider}', [SliderController::class, 'destroy'])->name('admin.slider-destroy');
    });
    Route::prefix('homeabout')->group(function() {
        Route::get('/',[HomeAboutController::class, 'index'])->name('backend.homeabout');
        Route::post('/',[HomeAboutController::class, 'store'])->name('admin.homeabout-store'); 
        // Route::get('/', [HomeAboutController::class, 'edit'])->name('admin.homeabout-edit'); // Need To Be Removed
        Route::put('/{homeAbout}',[HomeAboutController::class, 'update'])->name('admin.homeabout-update');
    });
    Route::prefix('partiners')->group(function() {
        Route::get('/',[PartinersController::class, 'index'])->name('backend.partiners');
        Route::post('/',[PartinersController::class, 'store'])->name('admin.partiners-create');
        Route::delete('{partiner}',[PartinersController::class, 'destroy'])->name('admin.partiners-destroy');
    });
    Route::prefix('gallery')->group(function() {
        Route::get('/',[GalleryController::class, 'index'])->name('backend.gallery');
        Route::post('/',[GalleryController::class, 'store'])->name('admin.gallery-create');
        Route::delete('{gallery}',[GalleryController::class, 'destroy'])->name('admin.gallery-destroy');
    });
    Route::prefix('hero')->group(function() {
        Route::get('/',[HeroSectionController::class, 'index'])->name('backend.hero');
        Route::post('/',[HeroSectionController::class, 'store'])->name('admin.hero-create');
        Route::put('/{theherosection}',[HeroSectionController::class, 'update'])->name('admin.hero-update');
    });
    Route::prefix('about-us')->group(function() {
        Route::get('/',[AboutUsController::class, 'index'])->name('backend.aboutus');
        Route::post('/',[AboutUsController::class, 'store'])->name('admin.aboutus-create');
        Route::put('/{singleAboutUsPage}',[AboutUsController::class, 'update'])->name('admin.aboutus-update');
    });
    Route::prefix('about-QA')->group(function() {
        Route::get('/',[AboutQAsController::class, 'index'])->name('backend.aboutqa');
        Route::post('/',[AboutQAsController::class, 'store'])->name('admin.aboutqa-create');
        Route::delete('{aboutqaid}', [AboutQAsController::class, 'destroy'])->name('admin.aboutqa-destroy');
    });
    Route::prefix('causes')->group(function() {
        Route::get('/', [AdminCausesController::class, 'index'])->name('backend.causes');
        Route::post('/', [AdminCausesController::class, 'store'])->name('admin.causes-create');
        Route::get('{causes}/edit', [AdminCausesController::class, 'edit'])->name('admin.cause-edit');
        Route::put('{causes}/update', [AdminCausesController::class, 'update'])->name('admin.cause-update');
        Route::delete('{cause}', [AdminCausesController::class, 'destroy'])->name('admin.cause-destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Routes For The Front-End (The WebSite).
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('frontend.index');
    Route::get('/about-us', [AboutController::class,'index'])->name('frontend.about-us');
    Route::get('/contact-us', [ContactController::class,'index'])->name('frontend.index');
    Route::get('/causes',[CausesController::class, 'index'])->name('frontend.casues');
    Route::get('/cause-details',[CauseDetailsController::class, 'index'])->name('frontend.casue-details');
});

