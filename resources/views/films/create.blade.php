@extends('layouts.app')
@section('content')

<h2> Create a Film </h2>

{!! Form::open(['action'=> 'FilmController@store', 'method'=> 'POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('nom','Nom')}}
    {{Form::text('nom','',['class'=> 'form-control', 'placeholder'=>'Nom'])}}
</div>
<div class="form-group">
    {{Form::label('auteur','Auteur')}}
    {{Form::text('auteur','',[ 'class'=> 'form-control', 'placeholder'=>'Auteur'])}}
</div>
<div class="form-group">
    {{Form::label('date_sortie','Date Sortie')}}
    {{Form::date('date_sortie','',[ 'class'=> 'form-control', 'placeholder'=>'Date de sortie'])}}
</div>
<div class="form-group">
            <input type="radio" name="disponible" value="1"> Disponible<br>

            <input type="radio" name="disponible" value="0">Non  Disponible<br>
</div>
<div class="form-group">
    {!! Form::Label('genre_id', 'Genre') !!}
    <select class="form-control" name="genre_id">
        @foreach($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->nom}}</option>
        @endforeach
    </select>
</div>


{{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}



@endsection