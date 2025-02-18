<?php
// filepath: /C:/Users/hp/desktop/laravel/project/newAluminiProject_L_10/routes/web.php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AluminiStories', function () {
    return view('AluminiStories');
});

// Contact Page Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact Form Submission Route
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Event Routes
Route::resource('/events', EventController::class);

// require __DIR__.'/auth.php';
