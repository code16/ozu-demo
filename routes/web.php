<?php

use App\Http\Controllers\Pages\ContactPageController;
use App\Http\Controllers\Pages\HomePageController;
use App\Http\Controllers\Pages\AboutPageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePageController::class)
    ->name('home');

Route::get('/projects/index/{page?}', [ProjectController::class, 'index'])
    ->name('projects.index');

Route::get('/projects/{project}', [ProjectController::class, 'show'])
    ->name('projects.show');

Route::get('/about', AboutPageController::class)
    ->name('about');

Route::get('/contact', ContactPageController::class)
    ->name('contact');
