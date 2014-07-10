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
	{{ Form::label('email', 'email', array('class' => 'sr-only')) }}<br>
	{{ Form::text('password', null, array('class' => 'form-control')) }}
	</div> <!-- class="form-group" -->


upload avatar
{{ Form::file('image') }}






{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
{{ Form::close() }}

</div> <!-- class="container" -->
@stop