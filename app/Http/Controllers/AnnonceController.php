<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Annonce;
use App\Models\Project;


class AnnonceController extends Controller
{
    public function index()
    {
        $projects = Project::with('user')->get();
        return view('annonces.index', compact('projects'));
    }

    public function create()
    {
        return view('annonces.create');
    }

    public function store(Request $request)
    {
        Project::create([

            'title' => $request->title,
            'description' => $request->description,
            'start' => now(),
            'end' => now(),
            'user_id' => auth()->id()

        ]);

        return redirect()->route('annonces.index')->with('success', 'project créée avec succès !');
    }

    public function show(Annonce $annonce)
    {

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