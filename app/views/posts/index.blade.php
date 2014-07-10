@extends('layouts.master')

@section('contents')
<div class="container">
   <h1>All the Posts </h1>

 
@foreach ($posts as $post)	
<hr>          <!-- blog entry -->
<div class="blog-post">
	<h1>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</h1>
<p class="lead">by {{$post->user->email}}</p>

<hr>
<p><span class="glyphicon glyphicon-time"></span> {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
  
  <hr>

<p><p>{{$post->RenderBody() }}</p></p>

<a class="btn btn-primary" href="{{ action('PostsController@show', $post->id) }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
	@endforeach
</div>	  
		{{ Form::close() }}

<div class="container">

<!-- // paginator version 1-->
<!-- {{ $posts->links() }} -->

<!-- // paginator version 2 with search fix-->
{{ $posts->appends(['search' => Input::get('search')])->links() }}
 
 </div>  
 
@stop <!-- @contents -->



@section('bottom')

@stop