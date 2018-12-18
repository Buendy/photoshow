@extends('layouts.app')

@section('content')
    <h3>Create album</h3>
    {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'post', 'file' => true]) !!}

    {{ Form::Text('name', '', ['placeholder' => 'Album name']) }}
    {{ Form::TextArea('description', '', ['placeholder' => 'Album description']) }}
    {{ Form::File('cover_image') }}
    {{ Form::Submit('Submit') }}

    {!! Form::close() !!}
@endsection
