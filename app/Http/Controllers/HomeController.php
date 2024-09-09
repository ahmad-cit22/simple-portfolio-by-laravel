<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homeContents = json_decode(file_get_contents(storage_path('data/home.json')), true);
        $workExperiences = json_decode(file_get_contents(storage_path('data/works.json')), true);
        $projects = json_decode(file_get_contents(storage_path('data/projects.json')), true);
        $awards = json_decode(file_get_contents(storage_path('data/awards.json')), true);
        $skills = json_decode(file_get_contents(storage_path('data/skills.json')), true);
        $testimonials = json_decode(file_get_contents(storage_path('data/testimonials.json')), true);

        return view('home', compact('homeContents', 'workExperiences', 'projects', 'awards', 'skills', 'testimonials')); 
    }
}
