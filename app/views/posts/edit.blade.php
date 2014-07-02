@extends('layouts.master')

@section('contents')
<h1>Edit Blog Item </h1>

{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put')) }}
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}<br>
    {{ Form::label('body', 'Edit Blog Body') }}
    {{ Form::textarea('body') }}
        <br>
        <input type="submit">

{{ Form::close() }}        
    
@stop