<?php 
$pageName = 'indexPage';
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
		<title>Fietsen Verheyen: A full Service Race, MTB and City Bicycle Shop</title>
		<meta name="description" content="Fietsen Verheyen: A full service Race, MTB and city bike shop. Serving Diest since 1973">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<meta name="author" content="mattpeternell.com">
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main.css">
		<link href="css/cycle-slideshow-style.css" rel="stylesheet" type="text/css" />

		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
				<?php include 'includes/google_analytics.php' ?>
	</head>
	<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=375004349287585";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div class="header-container">
			<header class="hdrbgcolor wrapper clearfix">				
				<?php include 'includes/main_nav_menu.php'?>				
				<?php include 'includes/main_social_menu.php'?>
			</header>
		</div>
		<div class="main-container">
			<div class="main wrapper clearfix">
				<article>
					<div class="cycle-slideshow" data-cycle-pause-on-hover="true" data-cycle-loader="wait">
						<!-- <div class="cycle-pager"></div> -->
						<img src="img/index-slideshow/fitz_05.jpg" alt="The Fietsen Verheyen Hand Built Bicycles" class="mainHeroImage">
						<img src="img/index-slideshow/IMG_4066_TWEAKED.jpg" alt="The Fietsen Verheyen Storefront" class="mainHeroImage">
						<img src="img/index-slideshow/TRIPLE_TWEAKED.jpg" alt="The Fietsen Verheyen workshop" class="mainHeroImage">
						<img src="img/index-slideshow/IMG_4070_TWEAKED.jpg" alt="Hours of Operation" class="mainHeroImage">
					</div>
					<aside class='index_overlay'>
						<h1>Fietsen Verheyen, A full service Race, MTB and city bike shop. </h1>
						<p>Serving the community of the Diest area in Vlaams Brabant, Antwerp, and Limburg provinces, Fietsen Verheyen re-opened in May 2011 in a new location in Diest.  Stop by to see our show room and enjoy a coffee on us.</p>
					</aside>
				</article>	
			</div>
			<!-- #main -->
		</div>
		<!-- #main-container -->

		<div class="footer-container">
			<footer class="wrapper">
				<article>
					<section class="socialFeeds">
						<h3>Fietsen Verheyen Social Feeds</h3>
						<div class="fb-like" data-href="http://www.facebook.com/pages/Fietsen-Verheyen/328230250552542" data-send="true" data-width="450" data-show-faces="true"></div>
				</article>
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

		
	</body>
</html>
