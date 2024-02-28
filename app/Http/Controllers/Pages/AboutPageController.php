<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;

class AboutPageController extends Controller
{
    public function __invoke()
    {
        return view('pages.about', [
            'page' => Page::query()
                ->whereJsonContains('custom_properties->key', 'about')
                ->firstOrFail()
        ]);
    }
}
