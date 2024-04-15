<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'subtitle' => 'required',
            'img_url' => 'required',
            'link' => 'required|url',
            'description' => 'required|max:200',
        ]);
        Project::create($validatedData);

        return redirect()->route('projects.create')->with('success', 'Продуктот е успешно додаден!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $project->update($updated = $request->validated());

        if ($updated) {
            return redirect()->route('index')->with('success', 'Проектот е успешно изменет!');
        }

        return redirect()->route('projects.edit', $project)->with('success', 'Нешто не е во ред!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('index')->with('success', 'Проектот е успешно избришан!');
    }
}
