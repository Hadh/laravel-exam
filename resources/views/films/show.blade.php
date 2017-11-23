@extends('layouts.app')
@section('content')
    <br>
    <br>
    <a href="/films" class="btn btn-default">Go Back</a>

    <h3>Name : {{$film->nom}}</h3>
    <div> Auteur :{{ $film->auteur }}</div>
    <div> Disponile :{{ $film->disponible }}</div>
    <div> Date Sortie :{{ $film->date_sortie }}</div>
    <hr>
    @if(!Auth::guest())

<a href="/films/{{$film->id}}/add_to_fav" class="btn btn-primary"> Add to Favourites</a>


    @endif
@endsection