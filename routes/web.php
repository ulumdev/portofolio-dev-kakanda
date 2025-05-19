<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(Auth::check() ? route('dashboard') : route('login'));
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('website.pages.dashboard.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware('auth')->group(function () {
    Route::get('/example', function () {
        return view('website.pages.example.index');
    })->name('example');

    Route::resource('education', EducationController::class);
});



require __DIR__ . '/auth.php';
