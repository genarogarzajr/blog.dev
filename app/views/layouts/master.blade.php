<!doctype html>
<html lang="en">
<head>
    <title>master.blade.php</title>
    <!-- jQuery code -->
    <script src="/js/jquery211.js"></script>
   



    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="/bootstrap/assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="/bootstrap/assets/css/font-awesome.min.css">
	<script src="/bootstrap/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/bootstrap/assets/js/smoothscroll.js"></script> 
    <script src="/bootstrap/assets/js/Chart.js"></script>

    
    <!-- Pagedown WYSIWYG editor files -->
     <link rel="stylesheet" type="text/css" href="/pagedown/demo/browser/demo.css" />
        
    <script type="text/javascript" src="/pagedown/Markdown.Converter.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Sanitizer.js"></script>
    <script type="text/javascript" src="/pagedown/Markdown.Editor.js"></script>
</head>

<body>


<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ action('PostsController@index')}}">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ action('PostsController@create')}}">New Post</a></li>
        <li><a href="#">Link</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul> -->
        </li>
      </ul>
      


      <form method="GET" action="http://blog.dev/posts" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Posts" name="search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      


      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li><a href="{{ action('HomeController@logout')}}">Logout</a></li>
        @else
        <li><a href="{{ action('HomeController@doLogin')}}">Login</a></li>
        @endif
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- FLASH MESSAGES -->
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