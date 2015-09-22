<?php 
$pageName = 'aboutPage';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>About - Fietsen Verheyen: A full Service Race, MTB and City Bicycle Shop</title>
		<meta name="description" content="Fietsen Verheyen: A full service Race, MTB and city bike shop. Serving Diest since 1998">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<meta name="author" content="mattpeternell.com">
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main.css">
		<link href="css/cycle-slideshow-style.css" rel="stylesheet" type="text/css" />

		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<?php include 'includes/vacation-alert.php'?>
		<div class="header-container">
			<header class="wrapper clearfix">
				<?php include 'includes/main_nav_menu.php'?>				
				<?php include 'includes/main_social_menu.php'?>
			</header>
		</div>

		<div class="main-container">
			<div class="main wrapper clearfix">

				<article>
					<div class="cycle-slideshow" data-cycle-pause-on-hover="true" data-cycle-loader="wait">
						<img src="img/about-slideshow/IMG_4066_TWEAKED.jpg" alt="Fietsen Verheyen Storefront" class="mainHeroImage">
						<img src="img/about-slideshow/IMG_4022_TWEAKED.jpg" alt="Inside Fietsen Verheyen and Art" class="mainHeroImage">
						<img src="img/about-slideshow/IMG_4023_TWEAKED.jpg" alt="The Fietsen Verheyen Showroom Floor" class="mainHeroImage">
						<img src="img/about-slideshow/IMG_4048_TWEAKED.jpg" alt="The Fietsen Verheyen workshop" class="mainHeroImage">
						<img src="img/about-slideshow/IMG_4018_TWEAKED.jpg" alt="The Fietsen Verheyen Esspresso Machine" class="mainHeroImage">
					</div>
				</article>

				 <aside class="boxHeight aboutPg">
					<h1>About</h1>
					<p>Fietsen Verheyen first opened in 1973. It is a family owned and family focused, full-service bicycle shop based in Diest, Belgium.  We specialize in helping you get the right bike for your needs.  An authorized E-Bike retail and servce point, we also have a full assortment of race, mountain, cyclocross, city, and children’s bikes.  We are also a fully certified mechanic and carry a full assortment of parts and accessories.</p>
				
				<h2>Store Hours ***</h2>
				<?php include 'includes/hours-of-opperation.php';?>
				
				<h2>Phone</h2>
				<ul>
					<li>+32 13 77 78 80</li>
				</ul>
				</aside>

			</div>
			<!-- #main -->
		</div>
		<!-- #main-container -->

		<div class="footer-container">
			<footer class="wrapper">
				<?php include 'includes/main_social_menu.php'?>
			</footer>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')
		</script>

		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script src="js/vendor/jquery.cycle2.js"></script>

		<?php include 'includes/google_analytics.php' ?>
	</body>
</html>
