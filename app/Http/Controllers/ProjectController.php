<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }
}
