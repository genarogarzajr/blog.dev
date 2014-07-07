@extends('layouts.master')

@section('contents')
<div class="container">
	<table class="table table-striped" padding='20px'>
	  	<tr>
		  	<th>Index #</th>
		  	<th>Title</th>
		  	<th>Body</th>
	  	</tr>
	  	<tr>
	  		<th>{{{$post->id }}}</th>
		  	<th>{{{$post->title }}}</th>
		  	<th>{{{$post->body }}}</th>

	  	</tr>
	</table>





{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}} <br>
<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn">Edit</a>


<!-- {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }} -->

<a href="{{ action('PostsController@destroy', $post->id) }}" class="btn btn-danger">Delete-href</a>
{{ Form::submit('Delete-form') }}

</div>    
{{ Form::close() }}

@stop






