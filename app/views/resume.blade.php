@extends('layouts.master')


@section('contents')
	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="smoothScroll" href="#about" title="About"><i class="icon-user"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#resume" title="Resume"><i class="icon-file"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#work" title="Works"><i class="icon-briefcase"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#contact" title="Contact"><i class="icon-envelope"></i></a></li>
						</ul><!--/ uL#nav -->
					</div><!-- /.dropdown -->

					<div class="clear"></div>
				</div><!--/.row -->
			</div><!--/.container -->

			<div class="clear"></div>
		</div><!--/ #topbar-inner -->
	</div><!--/ #section-topbar -->
	
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>Genaro Garza</h1>
					<h3>Web Designer | Genaro@codeup.com</h3>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->
	

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5>ABOUT</h5>
				</div>
				<div class="col-lg-6">
					<p>I'm a longtime IT tech with a focus on hardware.  Recently I decided to switch to web development</p>
				</div>
				<div class="col-lg-3">
					<p><a href="#"><i class="icon-file"></i></a> <sm>DOWNLOAD PDF</sm></p>
				</div>
				
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #intro -->


	<section id="resume" name="resume"></section>
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Web Developer</t><br/>
						Codeup WebDev School <br/>
						<i> 12 week intensive immersive book camp</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>Graduating in August</sm><br/>
					<imp><sm>IN PROGRESS</sm></imp>
					</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Bachelors Business Administation - IT</t><br/>
						University of Texas at San antonio <br/>
						<i>4 year course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>Graduated 2001</sm></p>
				</div>
	
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->
	
	
	<!--WORK DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>WORK</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Tech analyst II</t><br/>
						HCA Corp. <br/>
					</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>AUGUST 2012 - CURRENT</sm></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Web Designer - Intern</t><br/>
						Onassis Ltd. <br/>
					</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>JUNE 2010 - JULY 2012</sm></p>
				</div>
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->


	<!--AWARDS DESCRIPTION -->
	<!-- <div class="container desc">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>AWARDS</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Best Web Design</t><br/>
						Black Tie Site <br/>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>NOVEMBER 2013</sm></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Designer of the Year</t><br/>
						Awwwards Site
					</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>2013</sm></p>
				</div>
		
		</div><!--/.row -->
	<!-- 	<br>
	</div>/.container  --> -->
	
	
	<!--SKILLS DESCRIPTION -->
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="javascript" height="130" width="130"></canvas>
						<p>Javascript</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 10,
										color:"#1abc9c"
									},
									{
										value : 90,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="bootstrap" height="130" width="130"></canvas>
						<p>Bootstrap</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 20,
										color:"#1abc9c"
									},
									{
										value : 80,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="wordpress" height="130" width="130"></canvas>
						<p>Wordpress</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 0,
										color:"#1abc9c"
									},
									{
										value : 100,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					
					<div class="col-lg-3 col-lg-offset-3 centered">
						<canvas id="html" height="130" width="130"></canvas>
						<p>HTML/CSS</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 50,
										color:"#1abc9c"
									},
									{
										value : 50,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("html").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="photoshop" height="130" width="130"></canvas>
						<p>PHP</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 20,
										color:"#1abc9c"
									},
									{
										value : 80,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("photoshop").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="illustrator" height="130" width="130"></canvas>
						<p>CSS</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 10,
										color:"#1abc9c"
									},
									{
										value : 90,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("illustrator").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

			</div><!--/.row -->
			<br>
		</div><!--/.container -->
	</div><!--/ #skillswrap -->



	<section id="work" name="work"></section>
	<!--PORTFOLIO DESCRIPTION -->
	<div class="container desc">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>PORTFOLIO</h5>
				</div>
				<div class="col-lg-6">
					<p><img class="img-responsive" src="bootstrap/assets/img/port01.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
					<p>Fizz Buzz</p>
				<p><more>Epic firstime program designed to test programmers ability to write logic.<br/><br/>
					<sm><i class="icon-tag"></i> design</sm></more> 
				</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><img class="img-responsive" src="/bootstrap/assets/img/port02.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
						<p>Address Book</p>
					<p><more>My first PHP/HTML project<br/><br/>
						<sm><i class="icon-tag"></i> front-end</sm></more> 
					</p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p><img class="img-responsive" src="/bootstrap/assets/img/port03.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
						<p>Address Book</p>
					<p><more>My second PHP/HTML project<br/><br/>
						<sm><i class="icon-tag"></i> web design</sm></more> 
					</p>
				</div>
		
		</div><!--/.row -->
		<br>
		<br>
	</div><!--/.container -->
	


	<section id="contact" name="contact"></section>
	<!--FOOTER DESCRIPTION -->
	<div id="footwrap">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-2 col-lg-offset-1">
					<h5>CONTACT</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Email</t><br/>
						genaro@codeup.com <br/>
					</p>
					<p><t>Adress</t><br/>
						Some Ave. 987 <br/>
						22 acacia ave <br/>
						San antonio, TX <br/>
					</p>
					<p><t>Phone</t><br/>
						867-5309 <br/>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>SOCIAL LINKS</sm></p>
					<p>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-linkedin"></i></a>
						<a href="#"><i class="icon-apple"></i></a>

					</p>
				</div>
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #footer -->
	
	<div id="c">
		<div class="container">
			<p>Created by <a href="http://www.blacktie.co">BLACKTIE.CO</a></p>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/bootstrap/assets/js/bootstrap.js"></script>
  

@stop