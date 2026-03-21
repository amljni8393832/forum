<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Annonce;

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::with('user')->latest()->get();
        return view('annonces.index', compact('annonces'));
    }
    public function create()
    {
        return view('annonces.create');
    }

    public function store(Request $request)
    {

    }

    public function show(Annonce $annonce)
    {
        return view('annonces.show', compact('annonce'));
    }

    public function edit(Annonce $annonce)
    {

    }

    public function update(Request $request, Annonce $annonce)
    {

    }

    public function destroy(Annonce $annonce)
    {

    }
}
