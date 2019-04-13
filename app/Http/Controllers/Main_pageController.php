<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main_pageController extends Controller
{
    public function index()
    {
        $blog = DB::table('blogs')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.main_page', compact('blog'));
    }
}
