@extends('layouts.app')
@section('content')

    <h3>List of All Films</h3>

    @foreach($films as $film)

        <div class="well">
            <a href="/films/{{$film->id}}">  Name : {{$film->nom}}</a> <br>
        </div>

    @endforeach

@endsection