<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
    
        $project = new Project();
        $project->title = $request->input('title');
        $project->user_id = Auth::id();
        $project->save();
    
        return redirect()->route('dashboard')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        // The $project variable is automatically resolved using route model binding
        return view('projects.show', ['project' => $project]);
    }

    public function index()
    {
        $projects = Project::where('user_id', Auth::id())->get();
        return view('projects.index', ['projects' => $projects]);
    }
}
