<?php

namespace App\Http\Controllers;
use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function add_to_fav($film_id){
        $user = Auth::user();
        $user->films()->attach($film_id);
        $film = Film::find($film_id);
        return view('films.show')->with('film',$film);

    }

    public function remove_from_fav($film_id){
        $user = Auth::user();
        $user->films()->detach($film_id);
        $film = Film::find($film_id);
        return view('films.show')->with('film',$film);

    }

    public function user_favs(){
        $user = Auth::user();
        $favfilms =  $user->films()->get();
        return view('favs.index')->with('favfilms',$favfilms);
    }

}
