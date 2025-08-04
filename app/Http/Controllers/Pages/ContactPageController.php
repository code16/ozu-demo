<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;

class ContactPageController extends Controller
{
    public function __invoke()
    {
        return view('pages.contact', [
            'page' => Page::query()
                ->where('key', 'contact')
                ->firstOrFail(),
        ]);
    }
}
