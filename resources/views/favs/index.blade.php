@extends('layouts.app')
@section('content')

    <h3>My Favorite Films</h3>

    @foreach($favfilms as $film)

        <div class="well">
             Name : {{$film->nom}} <br>
            <a href="/films/{{$film->id}}/remove_from_fav" class="btn btn-warning"> Remove from Favourites</a>
        </div>



    @endforeach

@endsection