<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Project;

class HomePageController extends Controller
{
    public function __invoke()
    {
        return view('pages.home', [
            'projects' => Project::take(2)->get(),
        ]);
    }
}
