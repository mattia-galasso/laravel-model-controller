<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /* Funzione che recupera tutti i film dal database */
    public function index()
    {
        $movies = Movie::all();
        return view("index", compact('movies'));
    }
}
