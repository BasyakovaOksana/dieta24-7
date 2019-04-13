<?php

namespace App\Http\Controllers;

use App\Comments;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function index()
    {
        $comments = DB::table('comments')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pages.contacts', compact('comments'));
    }

    public function store(Request $request)
    {
        Comments::create($request->all());

        return redirect()->route('contacts');
    }

    public function contacts()
    {
        if (Auth::user()->role == 'user') {
            return view('contacts');
        } else {
            return redirect()->route('register');
        }
    }
}
