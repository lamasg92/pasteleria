<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>

<meta charset="UTF-8"/>

<title>Pasteleria Doña Lupe</title>

<meta name="description" content="Pasteleria">

<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" media="screen" href="vistas/css/bootstrap.css">
<link rel="stylesheet" href="vistas/css/font-awesome.css">
<link rel="stylesheet" href="vistas/css/animate.css">
<link rel="stylesheet" href="vistas/css/theme.css">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

</head>
<body>
<!--wrapper start-->
<div class="wrapper" id="wrapper">
	
	<!--header-->
	<header>
	<div class="banner row" id="banner">		
		<div class="parallax text-center" style="background-image: url(vistas/img/imagen7.jpg);">
			<div>
				<div class="container text-center" style="height:580px;padding-top:150px; padding-left:500px;">
					<a href="#"><img id="site-title" class=" wow fadeInDown" wow-data-delay="0.0s" wow-data-duration="0.9s" src="vistas/img/logo2.png" alt="logo"/></a>
					<h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s">Bienvenidos</h2>
				</div>
			</div>
		</div>
	</div>	
	<div class="menu">
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navwrapper">
					<div class="navbar navbar-inverse navbar-static-top">
						<div class="container">
							<div class="navArea">
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav">
										<li class="menuItem active"><a href="#wrapper">Home</a></li>
										<li class="menuItem"><a href="#aboutus">Sobre Nosotros</a></li>
										<li class="menuItem"><a href="#contact">Contactanos</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</header>
		
	<!--about us-->
	<?php
    
          include "modulos/sobreNosotros.php";

	?>
	
	<!--contacto-->
	<?php
    
          include "modulos/contacto.php";

	?>

	<!--footer-->
	<section class="footer" id="footer">
	<p class="text-center">
		<a href="#wrapper" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
	</p>
	<div class="container">
		<ul>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			<li><a href="#"><i class="fa fa-flickr"></i></a></li>
		</ul>
		<p>
			&copy; 2015 Copyright Your Website<br>
			 Theme by <a href="http://www.wowthemes.net">WowThemes.Net</a>
		</p>
	</div>
	</section>
	
</div><!--wrapper end-->

<!--Javascripts-->
<script src="vistas/js/jquery.js"></script>
<script src="vistas/js/modernizr.js"></script>
<script src="vistas/js/bootstrap.js"></script>
<script src="vistas/js/menustick.js"></script>
<script src="vistas/js/parallax.js"></script>
<script src="vistas/js/easing.js"></script>
<script src="vistas/js/wow.js"></script>
<script src="vistas/js/smoothscroll.js"></script>
<script src="vistas/js/masonry.js"></script>
<script src="vistas/js/imgloaded.js"></script>
<script src="vistas/js/classie.js"></script>
<script src="vistas/js/colorfinder.js"></script>
<script src="vistas/js/gridscroll.js"></script>
<script src="vistas/js/contact.js"></script>
<script src="vistas/js/common.js"></script>

<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'specialties',
		  3: 'gallery',
		  4: 'feedback',
		  5: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
});
</script>
</body>
</html>