<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;


Route::get(
    '/',
    [AuthenController::class, 'showLoginForm']
)->name('login');

Route::get(
    '/register',
    [AuthenController::class, 'showRegisterForm']
)->name('register');


