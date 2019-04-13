<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Create a new blog.
     *
     * @param  array $blog
     * @return \App\Blog
     */

    public function create()
    {
        return view('admin.blog');
    }

    public function store(Request $request)
    {

        Blog::create($request->all());

        return redirect()->route('admin');
    }
}
