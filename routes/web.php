<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('projects', [
        'projects' => App\Models\Project::all()
    ]);
});
