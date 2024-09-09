<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $homeContents = json_decode(file_get_contents(storage_path('data/home.json')), true);
        $workExperiences = json_decode(file_get_contents(storage_path('data/works.json')), true);
        $projects = json_decode(file_get_contents(storage_path('data/projects.json')), true);
        $testimonials = json_decode(file_get_contents(storage_path('data/testimonials.json')), true);

        return view('projects', compact('projects', 'workExperiences', 'homeContents', 'testimonials'));
    }

    public function show($id)
    {
        $projects = json_decode(file_get_contents(storage_path('data/projects.json')), true);
        $project = $projects[$id] ?? null;
        $homeContents = json_decode(file_get_contents(storage_path('data/home.json')), true);

        return view('project-details', compact('project', 'homeContents'));
    }

}
