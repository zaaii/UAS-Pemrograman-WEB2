<?php

namespace App\Http\Controllers;

use App\Models\Actor;
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
        $actor = Actor::all();
        return view('home', ['actor'=>$actor]);
    }

    public function showadmin()
    {
        $actor = Actor::all();
        return view('admin.index', ['actor'=>$actor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actor.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actorimg = $request->file('actor_img')->getClientOriginalName();
        //memindah file upload ke folder public/images
        $request->actor_img->move(public_path('images'), $poster);

        $name = $request->get('original_title');
        $gender = $request->get('overview');
        $born_date = $request->get('release_date');
        $age = $request->get('age');
        $country = $request->get('country');

        $actor = new Actor();
        $actor->name = $name;
        $actor->gender = $gender;
        $actor->image = $actorimg;
        $actor->born_date = $born_date;
        $actor->age = $actorimg;
        $actor->quality = $quality;
        $actor->country = $country;
        $actor->save();
        return redirect('admin')->with('message', 'Actor data Added!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actor = Actor::findOrFail($id);
        return view('admin.show')->with('actor', $actor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Actor::findOrFail($id);
        return view('actor.edit')->with('movie', $movies);
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
        $movies = Actor::findOrFail($id);
        $input = $request->all();
        $movies->update($input);
        return redirect('actor')->with('flash_message', 'Actor data updated!');
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
        return redirect('actor')->with('flash_message', 'aActor data deleted!');
    }
}
