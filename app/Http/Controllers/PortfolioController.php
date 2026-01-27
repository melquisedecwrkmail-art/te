<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // ✅ Import the Project model to access the database

class PortfolioController extends Controller
{
    // Home page
    public function home() {
        return view('home'); // returns resources/views/home.blade.php
    }

    // About page
    public function about() {
        return view('about');
    }

    // Projects page — THIS IS THE DYNAMIC PART
    public function projects() {
        // ✅ Get all projects from the database
        $projects = Project::all();

        // ✅ Pass the projects to the projects.blade.php view
        return view('projects', compact('projects'));
    }

    // Contact page
    public function contact() {
        return view('contact');
    }
}
