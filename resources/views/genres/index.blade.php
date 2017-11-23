@extends('layouts.app')
@section('content')

    <h3>All Genres and movies under the genres</h3>

    @foreach($genres as $genre)

        <div class="well">
            <a href="/films/{{$genre->id}}">  Name : {{$genre->nom}}</a> <br>
        </div>
        <ul>
            @foreach($genre->films as $g)
                <li>{{$g->nom}}</li>
            @endforeach
        </ul>

    @endforeach

@endsection