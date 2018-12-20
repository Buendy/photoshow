@extends('layouts.app')

@section('content')
    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>
    <a href="/albums/{{$photo->album_id}}">Volver a la Galería</a>
    <hr>
    <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
    <br><br>
    {!!Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'DELETE'])!!}
    {{Form::submit('Borrar', ['class' => 'button alert'])}}
    {!!Form::close()!!}
    <hr>
    <small>Size: {{$photo->size}}</small>
@endsection