<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\AlumniController; // Remove this line
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');

Route::get('/AluminiStories', [AlumniController::class, 'index'])->name('alumni.stories');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::resource('events', EventController::class);
// Route::resource('alumni', AlumniController::class);
Route::get('contact', [AlumniController::class, 'contact'])->name('contact');
Route::post('contact', [AlumniController::class, 'submitContact'])->name('contact.submit');
Route::get('/frontevents', [EventController::class, 'frontend']);
Route::get('/frontalumni', [AlumniController::class, 'frontend']);

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::resource('admin', AdminController::class)->middleware('check.admin');

require __DIR__.'/auth.php';
