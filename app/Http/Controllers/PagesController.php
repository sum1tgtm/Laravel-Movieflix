<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function movies()
    {
        //  return view('pages.movies');
        $movies = Movie::all();
        return view('pages.movies', compact('movies'));
    }

    public function payment(){
        return view('pages.payment');
    }
}
