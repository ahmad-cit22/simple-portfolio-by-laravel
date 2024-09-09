<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $homeContents = json_decode(file_get_contents(storage_path('data/home.json')), true);
        $workExperiences = json_decode(file_get_contents(storage_path('data/works.json')), true);

        return view('works', compact('workExperiences', 'homeContents'));
    }
}
