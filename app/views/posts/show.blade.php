@extends('layouts.master')

@section('contents')

{{{$post->title }}} <br>
{{{$post->body }}} <br>
{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}} <br>
<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>


{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
        {{ Form::submit('Delete') }}
    {{ Form::close() }}

@stop






