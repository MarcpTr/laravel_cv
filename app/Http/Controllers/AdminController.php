<?php

namespace App\Http\Controllers;

use App\Models\{Header, Technology, Description, Url, Project, ProjectTechnology};

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $projects = \App\Models\Project::all();
        $technologies = \App\Models\Technology::all();

        return view('admin', compact('projects', 'technologies'));
        return view('admin');
    }

    public function storeHeader(Request $request)
    {
        Header::create($request->validate([
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]));
        return redirect()->back()->with('success', 'Header creado.');
    }

    public function storeTechnology(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'icon' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $path = $request->file('icon')->store('technologies', 'public');

        Technology::create([
            'name' => $validated['name'],
            'icon_url' => 'storage/' . $path,
            'is_active' => $validated['is_active'],
        ]);

        return redirect()->back()->with('success', 'Technology creada con imagen.');
    }


    public function storeDescription(Request $request)
    {
        Description::create($request->validate([
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]));
        return redirect()->back()->with('success', 'Description creada.');
    }

    public function storeUrl(Request $request)
    {
        Url::create($request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'url' => 'required|string',
            'is_active' => 'required|boolean',
        ]));
        return redirect()->back()->with('success', 'URL creada.');
    }

    public function storeProject(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'live_app_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'img' => 'required|file|mimes:jpeg,png,jpg,svg,webp,gif|max:2048',
        ]);

        $path = $request->file('img')->store('projects', 'public');

        Project::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'live_app_url' => $validated['live_app_url'],
            'github_url' => $validated['github_url'],
            'img_url' => 'storage/' . $path,
        ]);

        return redirect()->back()->with('success', 'Proyecto creado con imagen.');
    }


    public function storeProjectTechnology(Request $request)
    {
        ProjectTechnology::create($request->validate([
            'project_id' => 'required|exists:projects,id',
            'technologie_id' => 'required|exists:technologies,id',
        ]));
        return redirect()->back()->with('success', 'Relación project-technology creada.');
    }
    public function showMessages()
    {
        return view('messages');
    }
}
