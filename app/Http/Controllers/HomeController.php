<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home', [
            'projects' => Project::take(3)->get(),
        ]);
    }
}
