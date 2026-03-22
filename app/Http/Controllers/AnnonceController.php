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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ]);

        Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'start' => $validated['start'],
            'end' => $validated['end'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('annonces.index')->with('success', 'Annonce publiée avec succès !');

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