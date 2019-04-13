<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nutrients;
use Illuminate\Support\Facades\DB;

class NutrientsController extends Controller
{
    public function index()
    {
        return view('pages.nutrients', compact('nutrients'));
    }

    public function nutrients($slug)
    {
        $nutrient = Nutrients::where('slug', $slug)->first();

        if ($nutrient == null) {
            \abort(404, 'Page not found');
        }
        return view('pages.nutrients', compact('nutrient'));
    }
}
