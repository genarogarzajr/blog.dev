<div class="container col-md-8">
<h2>Create New Post</h2>

@if (isset($post))
    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'class'=>'form', 'role'=>'form', 'method' => 'PUT')) }}
@else 
    {{ Form::open(array('action' => 'PostsController@store'))}}
@endif

<div class="form-group">
{{ Form::token() }}
{{ Form::label('title', 'Title', array('class' => 'sr-only')) }}<br>
{{ Form::text('title', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{ Form::label('body', 'Body', array('class' => 'sr-only')) }}<br>
{{ Form::textarea('body', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
{{ Form::close() }}