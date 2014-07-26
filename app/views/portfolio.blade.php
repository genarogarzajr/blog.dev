@extends('layouts.master')

@section('contents')
   <!-- Add custom CSS here -->
    <link href="/bootstrap/assets/css/stylish-portfolio.css" rel="stylesheet">
    <link href="/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/bootstrap/assets/css/my_settings.css" rel="stylesheet">
    <link href="/bootstrap/assets/css/font-mfizz.css" rel="stylesheet"  />
    <!-- <link href="/bootstrap/assets/css/demo.css" rel="stylesheet">
    <link  href="/bootstrap/assets/css/style.css" rel="stylesheet"></head> -->
    
    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="http://startbootstrap.com">Genaro Garza</a></li>
            
            <li><a href="#top">Home</a></li>
            
            <li><a href="#about">About</a></li>
            
            <li><a href="#services">Services</a></li>
            
            <li><a href="#portfolio">Portfolio</a></li>
            
            <li><a href="#contact">Contact</a></li>
            
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
            <h1>Genaro Garza</h1>
            <h3>
                <em>Portfolio</em> 
            </h3>
            <a href="#about" class="btn btn-default btn-lg">Find Out More</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <div id="about" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>Welcome to my journey into web development!</h2>
                    <p class="lead">After nearly 20 years in the hardware side of IT, 
                        I decided to change course and study to become a web developer.  
                        The curricula has been challenging to say the least and i have much to learn.  
                        I hope to one day get a job where I can code with a team and learn from their experience.  
                        <br> Below you will find examples of my work.  </a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->

    <!-- Services -->
    <div id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-2  text-center">
                    <h2>My Skills</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2  text-center">
                    <div class="service-item">
                        <i class="step icon-html size-72 php"></i>
                        <h4>HTML</h4>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="step icon-css size-72 php"></i>
                        <h4>CSS</h4>
                        <p></p>
                    </div>
                </div>


                <div class="col-md-2 text-center glyph">
                    <div class="preview-glyphs">
                        <i class="step icon-php size-72 php"></i>
                        <h4>PHP</h4>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-2 text-center glyph">
                    <div class="preview-glyphs">
                        <i class="step icon-mysql size-72 php"></i>
                        <h4>MYSQL</h4>
                        <p></p>
                    </div>
                </div>

                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="step icon-javascript size-72 php"></i>
                        <h4>Javascript</h4>
                        <p></p>
                    </div>
                </div>

            </div> <!-- class="row" -->



            <div class="row">
                                
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-cogs"></i>
                        <h4>jQuery</h4>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="service-item">
                        <i class="laravel icon-sign-laravel"></i>
                        <h4>Laravel</h4>
                        <p></p>
                    </div>
                </div>

            </div> <!-- class="row" -->

        </div> <!-- class="container" -->
    </div>  <!-- id="services" class="services" -->
    <!-- /Services -->

    <!-- Callout -->
                                       <!--  <div class="callout">
                                            <div class="vert-text">
                                                <h1>A Dramatic Text Area</h1>
                                            </div>
                                        </div> -->
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>My Portfolio</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center">
                    <div class="portfolio-item">
                        <a href="https://github.com/genarogarzajr/Codeup_Exercises/blob/master/fizz.php">
                            <img class="img-portfolio img-responsive" src="img/fizz_win7desktop2.jpg">
                        </a>
                        <h4>FizzBuzz</h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="portfolio-item">
                        <a href="https://github.com/genarogarzajr/Web_Todo_List/blob/master/public/todo_list.php">
                            <img class="img-portfolio img-responsive" src="img/todo_win7desktop.jpg">
                        </a>
                        <h4>ToDo List</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center">
                    <div class="portfolio-item">
                        <a href="https://github.com/genarogarzajr/Codeup_Exercises/blob/master/palindrome.php">
                            <img class="img-portfolio img-responsive" src="img/palindrome.png">
                        </a>
                        <h4>Palindrome</h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-portfolio img-responsive" src="img/add_win7desktop.jpg">
                        </a>
                        <h4>Address Book</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Portfolio -->

    <!-- Call to Action -->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h3>Contact me</h3>
                    <a href="#" class="btn btn-lg btn-default">email</a>
                    <a href="#" class="btn btn-lg btn-primary">Look at Me!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Call to Action -->

    <!-- Map -->
   <!--  <div class="container">
    <div id="contact" class="map">
        <iframe width="50%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="25" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=112+E+Pecan+St,+San+Antonio,+TX&amp;aq=&amp;sll=29.481431,-98.514404&amp;sspn=0.698152,1.234589&amp;ie=UTF8&amp;hq=&amp;hnear=112+E+Pecan+St,+San+Antonio,+Texas+78205&amp;ll=29.428229,-98.492384&amp;spn=0.010914,0.01929&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        <br />




        <br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=112+E+Pecan+St,+San+Antonio,+TX&amp;aq=&amp;sll=29.481431,-98.514404&amp;sspn=0.698152,1.234589&amp;ie=UTF8&amp;hq=&amp;hnear=112+E+Pecan+St,+San+Antonio,+Texas+78205&amp;ll=29.428229,-98.492384&amp;spn=0.010914,0.01929&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe> -->
            <!-- <div id="test"> -->
                


            <!-- </div> -->
    <!-- </div> id="contact" class="map" -->
<!-- </div> class="container" -->
    <!-- /Map -->


<div class="container">
<h3>Send me an email</h3>





</div>






    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="list-inline">
                        <li><i class="fa fa-facebook fa-3x"></i>
                        </li>
                        <li><i class="fa fa-twitter fa-3x"></i>
                        </li>
                        <li><i class="fa fa-dribbble fa-3x"></i>
                        </li>
                    </ul>
                    <div class="top-scroll">
                        <a href="#top"><i class="fa fa-arrow-circle-up scroll fa-4x"></i></a>
                    </div>
                    <hr>
                    <p>Copyright &copy; Genarogarzajr.com 2013</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="bootstrap/js/jquery-1.10.2.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
@stop