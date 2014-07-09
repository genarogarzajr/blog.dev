@extends('layouts.master')

@section('contents')
<div class="container">
   <h1>All the Posts </h1>

   <table class="table table-striped">
       <tr>
           <th>Title</th>
           <th>Author</th>
           <th>Creation Date</th>
           <th>Actions</th>
       </tr>
        @foreach ($posts as $post)
        <tr>
           <td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
            				<!-- same as -->
      <!-- <td><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></td> -->
           
           <td>{{$post->user->email}}</td>
           <td>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
           <td>	<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
           		<a href="#" class="deletePost btn-danger btn-sm" data-postid="{{ $post->id }}">Delete</a>

           </td>
        </tr>
        @endforeach
    </table>


<!-- // paginator -->
   <!-- {{ $posts->links() }} -->
	

	<div>
	  {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET'))}}
	  
		  <div class="form-group">
		  {{ Form::label('query', 'Search For Title') }}
		  {{ Form::text('search', null,array('placeholder' => 'Search query', 'class' => 'form-control col-lg-4')) }}
		  
		</div>
		<button type="submit" class="btn btn-success">Submit</button>
	</div>
</div>	  
		{{ Form::close() }}

<div class="container">
<!-- // paginator -->
{{ $posts->appends(['search' => Input::get('search')])->links() }}
 </div>  
 {{ Form::open(array('action' => 'PostsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
{{ Form::close() }}
@stop <!-- @contents -->



@section('bottom')
<script type="text/javascript">
   $(".deletePost").click(function() {
       var postId = $(this).data('postid');
       $("#deleteForm").attr('action', '/posts/' + postId);
       if(confirm("Are you sure you want to delete post")) {
           $('#deleteForm').submit();
       }
   });
</script>
@stop