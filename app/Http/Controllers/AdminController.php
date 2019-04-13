<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->role == 'admin') {
            return view('admin.blog');
        } else {
            return redirect()->route('main_page');
        }
    }
}
