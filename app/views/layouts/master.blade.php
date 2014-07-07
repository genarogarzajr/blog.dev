<!doctype html>
<html lang="en">
<head>
    <title>master.blade.php</title>
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/bootstrap/assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="/bootstrap/assets/css/font-awesome.min.css">
	 <script src="/bootstrap/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/bootstrap/assets/js/smoothscroll.js"></script> 
    <script src="/bootstrap/assets/js/Chart.js"></script>
</head>
<body>
<div>
@if(Auth::check())
    logged in <br>
<a href="{{ action('HomeController@logout')}}" class="btn btn-default btn-small"> Logout</a> <br>
{{ link_to_action('PostsController@create', 'New Post', [], ['class' => 'btn btn-success pull-right']) }}

@else
not logged in<br>
<a href="{{ action('HomeController@showLogin')}}" class="btn btn-default btn-small"> Login</a>
@endif

</div>



    <div>
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif

        @yield('contents')
    </div>


</body>
</html>