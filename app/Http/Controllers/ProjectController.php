<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class ProjectController extends Controller
{
    // Show all projects
    public function index()
    {
        $projects = Project::with('user')->latest()->get();
        return view('projects.index', compact('projects'));
    }

    // Show form to create a new project
    public function create()
    {
        return view('projects.create');
    }

    // Store a new project
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ]);

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'start' => $request->start,
            'end' => $request->end,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('projects.index')->with('success', 'Projet créé avec succès.');
    }

    // Show a single project
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Show edit form
    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.edit', compact('project'));
    }

    // Update a project
    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ]);

        $project->update($request->only('title', 'description', 'start', 'end'));

        return redirect()->route('projects.index')->with('success', 'Projet mis à jour.');
    }

    // Delete a project
    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Projet supprimé.');
    }
}
