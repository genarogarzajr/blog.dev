@extends('layouts.master')

@section('contents')

   <h1>All the Posts {{ link_to_action('PostsController@create', 'New Post', [], ['class' => 'btn btn-success pull-right']) }}</h1>

   <table class="table table-striped">
       <tr>
           <th>Title</th>
           <th>Creation Date</th>
           <th>Actions</th>
       </tr>
        @foreach ($posts as $post)
        <tr>
           <td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
            				<!-- same as -->
            <!-- <td><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></td> -->
           <td>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</td>
           <td><a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
        </tr>
        @endforeach
    </table>

   {{ $posts->links() }}
   
@stop


<!-- put timezone stuff here -->