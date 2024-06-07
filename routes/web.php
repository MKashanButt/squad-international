<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// Pages
Route::get('/', function () {
    return view('home');
});
Route::view('/blogs', 'blogs');
Route::view('/about-us', 'about-us');
Route::get('/about-us', function () {
    return view('about-us');
});
Route::view('/reviews', 'reviews');
// Service Pages
Route::get('/services/branding', function () {
    return view('services.branding');
});
Route::view('/services/design', 'services.design');
Route::view('/services/development', 'services.development');

// Form Submission
Route::get('/submission', [FormController::class, 'store']);
