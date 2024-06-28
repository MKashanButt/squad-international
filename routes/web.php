<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// Pages
Route::view('/blogs', 'blogs');
Route::view('/about-us', 'about-us');
Route::get('/about-us', function () {
    return view('about-us');
});

Route::controller(AppController::class)->group(function () {
    Route::get('/', 'reviews');
    Route::get('/reviews', 'render_review_page');
    Route::post('/reviews/store', 'store_reviews');
});
// Service Pages
Route::get('/services/branding', function () {
    return view('services.branding');
});
Route::view('/services/design', 'services.design');
Route::view('/services/development', 'services.development');

// Form Submission
// Route::get('/submission', [FormController::class, 'store']);
