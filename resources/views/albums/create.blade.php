@extends('layouts.app')

@section('content')
    <h3>Create Album</h3>

    {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'post', 'files' => true]) !!}
        {{ Form::text('name', '', ['placeholder' => 'Album name']) }}
        {{ Form::textarea('description', '', ['placeholder' => 'Album description']) }}
        {{ Form::file('cover_image') }}
        {{ Form::submit('Submit') }}
    {!! Form::close() !!}
@endsection