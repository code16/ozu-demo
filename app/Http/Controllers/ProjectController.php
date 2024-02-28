<?php

namespace App\Http\Controllers;

use App\Models\Project;

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
            'previousProject' => Project::where('order', '<=', $project->order)
                ->where('id', '!=', $project->id)
                ->orderBy('order', 'desc')
                ->orderBy('id', 'desc')
                ->first(),
            'nextProject' => Project::where('order', '>=', $project->order)
                ->where('id', '!=', $project->id)
                ->orderBy('order', 'asc')
                ->orderBy('id', 'asc')
                ->first()
        ]);
    }
}
