<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// è necessario importare il model
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {

        $movies = Movie::all();

        return view('welcome', compact('movies'));
    }
}
