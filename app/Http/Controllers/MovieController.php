<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showhome()
    {
        $movies = Movie::all();
        return view('home', ['movies'=>$movies]);
    }

    public function showadmin()
    {
        $movies = Movie::all();
        return view('admin.index', ['movies'=>$movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movie.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poster = $request->file('poster_path')->getClientOriginalName();
        //memindah file upload ke folder public/images
        $request->poster_path->move(public_path('images'), $poster);

        $title = $request->get('original_title');
        $overview = $request->get('overview');
        $release_date = $request->get('release_date');
        $length = $request->get('length');
        $quality = $request->get('quality');
        $country = $request->get('country');
        $genre = $request->get('genre');
        $category = $request->get('category');

        $movie = new Movie();
        $movie->original_title = $title;
        $movie->overview = $overview;
        $movie->poster_path = $poster;
        $movie->release_date = $release_date;
        $movie->length = $length;
        $movie->quality = $quality;
        $movie->country = $country;
        $movie->genre = $genre;
        $movie->category = $category;
        $movie->save();
        return redirect('admin')->with('message', 'Movie Added!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = Movie::findOrFail($id);
        return view('admin.show')->with('movies', $movies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movie::findOrFail($id);
        return view('movie.edit')->with('movie', $movies);
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
        $movies = Movie::findOrFail($id);
        $input = $request->all();
        $movies->update($input);
        return redirect('movie')->with('flash_message', 'Movie updated!');
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
        return redirect('movie')->with('flash_message', 'Movie deleted!');
    }
}
