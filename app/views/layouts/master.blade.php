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

    <!-- jQuery code -->
    <script src="/js/jquery211.js"></script>

    <!-- Pagedown WYSIWYG editor files -->
     <link rel="stylesheet" type="text/css" href="/pagedown/demo/browser/demo.css" />
        
    <script type="text/javascript" src="/pagedown/Markdown.Converter.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Sanitizer.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Editor.js"></script>

</head>
<body>
<div class="container">

    @if(Auth::check())
        <br>
    <div class="col-md-1">
        <a href="{{ action('HomeController@logout')}}" class="btn btn-default btn-small"> Logout</a> <br>
    </div> <!-- class="col-md-1" -->
   
    <div class="col-md-10">
        {{ link_to_action('PostsController@index', 'Home Page', [], ['class' => 'btn btn-success pull-right']) }}
    </div>
   
    <div class="col-md-1">
    {{ link_to_action('PostsController@create', 'New Post', [], ['class' => 'btn btn-success pull-right']) }}
    </div> <!-- class="col-md-1" -->
    
    @else
    <br>
    <div class="col-md-1">
        <a href="{{ action('HomeController@showLogin')}}" class="btn btn-default btn-small"> Login</a>
    </div> <!-- class="col-md-1" -->
    
    <div class="col-md-10"></div>

    <div class="col-md-1">
    {{ link_to_action('PostsController@create', 'New Post', [], ['class' => 'btn btn-success pull-right']) }}
    </div> <!-- class="col-md-1" -->
    @endif

</div> <!-- class="container" -->

    <div>
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif

        @yield('contents')
    </div>

@yield('bottom')
</body>
</html>