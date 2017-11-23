<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Film;
use App\Http\Requests\AddFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $films = Film::orderBy('nom','desc')->get();
        return view('films.index')->with('films',$films);
    }

    public function filmApi(){
        return Film::orderBy('date_sortie','desc')->take(10)->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres= Genre::all();
        return view('films.create')->with('genres',$genres);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AddFilmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddFilmRequest $request)
    {

        $film = Film::create($request->only(
            'nom', 'auteur', 'date_sortie', 'disponible','genre_id'
        ));

        return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::find($id);
        return view ('films.show')->with('film',$film);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
        $genres= Genre::all();
        return view('films.edit')->compact('film','genres');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFilmRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilmRequest $request, $id)
    {

        $film = Film::find($id);
        $film->fill($request->all());
        $film->save();
        return redirect()->route('films.index')->with('success','Film Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
