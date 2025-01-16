<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Define all web routes for your application here. These routes are loaded
| by the RouteServiceProvider and grouped under the "web" middleware.
|
*/

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/greetings', function () {
    return 'Halo, bagaimana kabarmu dunia?';
});

Route::get('/greetings/{name}', function ($name) {
    return "Hai, bagaimana kabar $name?";
});

Route::get('/fullname/{firstName}/{lastName}', function ($firstName, $lastName) {
    return "Hai, bagaimana kabar $firstName $lastName?";
});

Route::get('/homepage', [BiodataController::class, 'home']);
Route::get('/about-us', [BiodataController::class, 'about']);

// Without Controller
Route::get('/website', function () {
    return view('home'); // location:: resources/views
})->name('homepage');

Route::get('/website/about', function () {
    return view('about'); // location:: resources/views
})->name('aboutpage');

Route::get('/website/contact', function () {
    return view('contact'); // location:: resources/views
})->name('contactpage');

Route::get('/page/home', [PageController::class, 'home'])->name('homepage');
Route::get('/page/about', [PageController::class, 'about'])->name('aboutpage');
Route::get('/page/contact', [PageController::class, 'contact'])->name('contactpage');
