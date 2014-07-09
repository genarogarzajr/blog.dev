@extends('layouts.master')

@section('contents')


<div class="container">
	<h2>Create New Post</h2>

	@if (isset($post))
    	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'class'=>'form', 'role'=>'form', 'method' => 'PUT', 'files' => true)) }}
	@else 
    	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal', 'files' => true))}}
	@endif

	<div class="form-group">
	{{ Form::token() }}
	{{ Form::label('title', 'Title', array('class' => 'sr-only')) }}<br>
	{{ Form::text('title', null, array('class' => 'form-control')) }}
	</div> <!-- class="form-group" -->

{{ Form::file('image') }}

<div class="wmd-panel">
	<div id="wmd-button-bar"></div>	
		<div class="form-group">
		{{ Form::label('body', 'Body', array('class' => 'sr-only')) }}<br>
		{{ Form::textarea('body', null, array('class' => 'form-control wmd-input', 'id' => 'wmd-input')) }}
		</div> <!-- class form-group -->
</div> <!-- class="wmd-panel" -->

Markdown Preview
<div id="wmd-preview" class="wmd-panel wmd-preview"></div>




{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
{{ Form::close() }}
</div>
@stop

@section('bottom')
<script type="text/javascript">
var converter = Markdown.getSanitizingConverter();
var editor = new Markdown.Editor(converter);
editor.run();
</script>
@stop