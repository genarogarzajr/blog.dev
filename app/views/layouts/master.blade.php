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