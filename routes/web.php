<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ProjectController;


Route::get('/', [AuthenController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthenController::class, 'login'])->name('login.post');
Route::get('/register', [AuthenController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthenController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthenController::class, 'logout'])->name('logout');

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::resource('annonces', AnnonceController::class);
    Route::resource('projects', ProjectController::class);
});
