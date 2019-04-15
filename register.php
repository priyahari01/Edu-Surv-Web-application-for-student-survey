<?php
session_start();
include("connectdb.php");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    destroy_session();
}
$success="You have successfully registered";
$error="Error while registering";
if(isset($_POST['name'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$sql = "INSERT INTO users(name,email,contact,password) VALUES('$name','$email',$contact,'$password')";
	if (mysqli_query($conn, $sql)) {
	    echo "<script type='text/javascript'>alert('$success');</script>";
	}
	else {
    	echo "<script type='text/javascript'>alert('$error');</script>";
	}
mysqli_close($conn);
//header('Location: index.php');
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>

	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1 > <a href="index.html"><img src="images/s2.png" alt=""><span class=""> Edu Surv </span></a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="index.php">Login</a></li>
				<li class=""><a href="register.php">Register</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text-w3pvt">
					<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Educational Surveys.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Study For Better Future</h4>
										<p class="w3ls_pvt-title my-3">We offer educational surverys for students and provide
										them with necessary support.</p>
										<a href="#" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- //banner slider-->
				</div>
				<div class="col-lg-5 col-md-8 px-lg-3 px-0">
					<div class="banner-form-w3 ml-lg-5">
						<div class="padding">
							<!-- banner form -->
							<form action="" method="post">
								<h5 class="mb-3">Register to continue</h5>
								<div class="form-style-w3ls">
									<input placeholder="Student Name" name="name" type="text" required="">
									<input placeholder="Your Email Id" name="email" type="email" required="">
									<input placeholder="Contact Number" name="contact" type="text" required="">
									<input placeholder="Password" name="password" type="password" required="">
									<button Class="btn"> Get Started</button>
									<span>By registering, you agree to our <a href="#">Terms & Conditions.</a></span>
								</div>
							</form>
							<!-- //banner form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- footer -->
<footer>
	<div class="footer-layer py-sm-5 pt-5 pb-3">
		<div class="container py-md-3">
			<div class="footer-grid_section text-center">
				<div class="footer-title mb-3">
					<a href="#"><img src="images/s2.png" alt=""> Edu Surv </a>
				</div>
				<div class="footer-text">
					<p>Find Us On</p>
				</div>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					<li class="pinterest"><a href="#"><span class="fa fa-pinterest"></span></a></li>
					<li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<section class="copyright">
	<div class="container py-4">
		<div class="row bottom">
			
			<div class="text-center">
				<p class="">© 2019 Edu Surv. All rights reserved | Design by
					<a href="#"> Hari Priya</a>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>
