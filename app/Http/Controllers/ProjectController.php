<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = json_decode(file_get_contents(storage_path('data/projects.json')), true);
        return view('projects', compact('projects'));
    }

    public function show($id)
    {
        $projects = json_decode(file_get_contents(storage_path('data/projects.json')), true);
        $project = $projects[$id] ?? null;
        return view('project-details', compact('project'));
    }

}
