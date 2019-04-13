<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\DB;
use App\Menu;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        if ($page == null) {
            \abort(404, 'Page not found');
        }
        return view('home', compact('page'));
    }
}
