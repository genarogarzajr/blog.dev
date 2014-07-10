@extends('layouts.master')

@section('contents')

	<!-- {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }} -->

	<!-- <a href="{{ action('PostsController@destroy', $post->id) }}" class="btn btn-danger">Delete-href</a> -->
	<!-- same as -->
	<!-- {{ Form::submit('Delete-form', array('class' => 'btn btn-danger')) }} -->

@if (Auth::check())
	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'id' => 'deleteForm', 'method' => 'DELETE')) }}
	{{ Form::close() }}

   	<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>

   	<a href="#" class="deletePost btn-danger btn-sm" data-postid="{{ $post->id }}">Delete</a>

@endif



<!-- blog entry -->
  <div class="blog-post">
    <h1>{{{$post->title }}}</h1>
    <p class="lead">by {{$post->user->email}}</p>
        <hr>
    <p><span class="glyphicon glyphicon-time"></span> {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
    <hr>
        <p><p>{{$post->RenderBody() }}</p></p>
  </div>

	@if ($post->img_path)
	<img src="{{{ $post->img_path }}}" class="img-responsive">
	@endif

</div>  <!-- class="container"  --> 


<!-- //DisQus -->
    <div class="container">
	    <div id="disqus_thread"></div>
	    <script type="text/javascript">
	        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	        var disqus_shortname = 'codeupblog'; // required: replace example with your forum shortname

	        /* * * DON'T EDIT BELOW THIS LINE * * */
	        (function() {
	            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	        })();
	    </script>
	    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
	</div> <!-- class="container" DisQus -->

@stop

@section('bottom')
<script type="text/javascript">
   $(".deletePost").click(function() {
       if(confirm("Are you sure you want to delete post")) {
           $('#deleteForm').submit();
       }
   });
</script>
@stop




