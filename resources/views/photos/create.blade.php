@extends('layouts.app')

@section('content')
    <h3>Añadir Foto</h3>
    {!!Form::open(['action' => 'PhotosController@store','method' => 'POST', 'files' => true])!!}
    {{Form::text('title','',['placeholder' => 'Título de la Foto'])}}
    {{Form::textarea('description','',['placeholder' => 'Photo Description'])}}
    {{Form::hidden('album_id', $album_id)}}
    {{Form::file('photo')}}
    {{Form::submit('submit')}}
    {!! Form::close() !!}
@endsection