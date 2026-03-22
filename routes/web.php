<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ProjectController;

// Authentification routes
Route::get('/', [AuthenController::class , 'showLoginForm'])->name('login');
Route::post('/login', [AuthenController::class , 'login'])->name('login.post');
Route::get('/register', [AuthenController::class , 'showRegisterForm'])->name('register');
Route::post('/register', [AuthenController::class , 'register'])->name('register.post');
Route::post('/logout', [AuthenController::class , 'logout'])->name('logout');

// Page annonces (protégée par auth)
Route::middleware(['auth'])->group(function () {
    // Liste des annonces
    Route::get('/annonces', [AnnonceController::class , 'index'])->name('annonces.index');

    // Formulaire de création d’une annonce
    Route::get('/annonces/create', [AnnonceController::class , 'create'])->name('annonces.create');

    // Enregistrement d’une nouvelle annonce
    Route::post('/annonces', [AnnonceController::class , 'store'])->name('annonces.store');
});
