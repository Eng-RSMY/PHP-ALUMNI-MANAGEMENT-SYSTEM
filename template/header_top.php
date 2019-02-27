
<!DOCTYPE html>
<html lang="en">
<head>
<title>Alumni Management System</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="alumni project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="css/main_styles.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>

<div class="super_container" >

	<!-- Header -->

	<div class="header" >
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li>
										<i class="fa fa-phone" aria-hidden="true" style="font-size: 20px;"></i>
										<div style="font-size: 20px;">01751337061</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px;"></i>
										<div style="font-size: 20px;">easylearn@gmail.com</div>
									</li>
									<li>
										<!--clock part-->
									<nav>

									    <div style="color: #fff">
									        <script  type="text/javascript" src="js/clock.js"></script>
									        <div id="clockbox" style="font-size:20px;"></div>

									       </div> 
									</nav>
									<!--clock part end-->
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div style="font-size: 20px;color: #FFF;text-align: center;"><label type="text"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor: pointer;">Login</label><i class="fa fa-sign-in ml-2"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>




		<!-- Header Content -->
		<div class="header_container" style="padding:25px;">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text"><img src="images/alumni_logo.jpg" style="width: 140px;height:135px;"></div>
									
								</a>
							</div>
							
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
								<li><a href="index.php" class="fa fa-home" style="font-size: 25px;">Home</a></li>
				                 <li><a href="adminlogin.php" class="fa fa-user" style="font-size: 25px;">Admin</a></li>
				                 <li><a href="event_manager_login.php" class="fa fa-university" style="font-size: 25px;">Event Manager</a></li>
				                 <li><a href="alumnilogin.php" class="fa fa-graduation-cap" style="font-size: 25px;">Alumni</a></li>
									<!--<li><a href="#" style="font-size:25px;"  class="fa fa-user">About</a></li>-->
								<li><a href="contact.html" class="fa fa-envelope" style="font-size: 25px;">Contact</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</div>

	<!--mobile Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="#">Admin</a></li>
				<li class="menu_mm"><a href="#">Event Manager</a></li>
				<li class="menu_mm"><a href="#">Alumni</a></li>
				<li class="menu_mm"><a href="#">About us</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="css/bootstrap4/popper.js"></script>
<script src="css/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script> 