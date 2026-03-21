<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    // Afficher la page de login
    public function showLoginForm()
    {
        return view('authen.login');
    }

    public function showRegisterForm()
    {
        return view('authen.register');
    }

}

