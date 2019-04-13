<?php

namespace App\Http\Controllers;

use App\Food_at_diseases;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Food_at_diseasesController extends Controller
{
    public function index()
    {
        return view('pages.food_at_diseases', compact('food_at_diseases'));
    }

    public function food_at_diseases($slug)
    {
        $food_at = Food_at_diseases::where('slug', $slug)->first();

        if ($food_at == null) {
            \abort(404, 'Page not found');
        }
        return view('pages.food_at_diseases', compact('food_at'));
    }
}
