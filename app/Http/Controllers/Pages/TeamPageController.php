<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;

class TeamPageController extends Controller
{
    public function __invoke()
    {
        return view('pages.team', [
            'page' => Page::firstWhere('key', 'team')
        ]);
    }
}
