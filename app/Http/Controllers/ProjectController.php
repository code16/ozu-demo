<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.projects', [
            'projects' => Project::simplePaginate(4, page: request()->route()->parameter('page')),
        ]);
    }

    public function show(Project $project)
    {
        return view('pages.project', [
            'project' => $project,
            'previousProject' => Project::where('id', '<', $project->id)
                ->orderBy('id', 'desc')
                ->first(),
            'nextProject' => Project::where('id', '>', $project->id)
                ->orderBy('id', 'asc')
                ->first()
        ]);
    }
}
