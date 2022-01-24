<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

use function PHPUnit\Framework\returnSelf;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all();
        return view('admin.home', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->movie_name=$request->movie_name;
        $image_name=$request->file('image_path')->getClientOriginalName();
        $movie_path=$request->file('movie_path')->getClientOriginalName();
        $movie->image_path = 'images/'.$image_name;
        $movie->movie_path = 'movies/'.$movie_path;
        $movie->save();
        return redirect()->route('admin.add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $movie=Movie::find($id);
        return view('admin.edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->movie_name=$request->movie_name;
        $image_name=$request->file('image_path')->getClientOriginalName();
        $movie_path=$request->file('movie_path')->getClientOriginalName();
        $movie->image_path = 'images/'.$image_name;
        $movie->movie_path = 'movies/'.$movie_path;
        $movie->save();
        return redirect()->route('admin.home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::destroy($id);
        return redirect()->route('admin.home');
    }
}
