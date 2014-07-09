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
			  	<th>{{$post->RenderBody() }}</th>

		  	</tr>
		</table>

	<p></p>

	@if ($post->img_path)
	<img src="{{{ $post->img_path }}}" class="img-responsive">
	@endif


	{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}} <br>
	<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default btn">Edit</a>


	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}

	<!-- <a href="{{ action('PostsController@destroy', $post->id) }}" class="btn btn-danger">Delete-href</a> -->
	<!-- same as -->
	{{ Form::submit('Delete-form', array('class' => 'btn btn-danger')) }}

</div>  <!-- class="container"  --> 
{{ Form::close() }}

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
    
</div> <!-- class="container" -->

@stop






