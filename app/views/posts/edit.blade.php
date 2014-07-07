@extends('layouts.master')

@section('contents')
<h1>Edit Blog Item </h1>


<div>
{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put')) }}
    {{ Form::label('title', 'Title') }}<br>
    {{ Form::text('title') }}<br><br>
    {{ Form::label('body', 'Edit Blog Body') }}<br>
    {{ Form::textarea('body') }}
        <br>
        <input type="submit">

{{ Form::close() }}        
</div> 
@stop