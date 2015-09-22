<?php 
$pageName = 'brandsPage';
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
		<title>Brands - Fietsen Verheyen: A full Service Race, MTB and City Bicycle Shop</title>
		<meta name="description" content="Fietsen Verheyen: A full service Race, MTB and city bike shop. Serving Diest since 1998">
		<meta name="keywords" content="Bronto bikes, Stoemper Bikes, Electra Cruisers, Kona Mountain Bikes, CKT, Sparta, Kokua, Merida Bicycles, Reven Road Bikes">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main.css">

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
					<header>
						<h1>Bike brands we are proud to carry:</h1>
						<!-- <p>We are proud to carry the following bike brands:</p> -->
					</header>
					<section class="brands grey-bground">
						<ul class="clearfix">
							<li><a href="http://www.electrabike.com/" title="Electra"><img src="img/brands/FITZ_LOGOFARM_electra.jpg" alt="Electra"></a></li>
							<li><a href="http://www.hollandbikes.com/" title="Batavus"><img src="img/brands/FITZ_LOGOFARM_batavus.jpg" alt="Batavus"></a></li>
							<li><a href="http://www.konaworld.com/" title="Kona"><img src="img/brands/FITZ_LOGOFARM_kona.jpg" alt="Kona"></a></li>
							<li><a href="http://www.cktbenelux.com/" title="CKT"><img src="img/brands/FITZ_LOGOFARM_ckt.jpg" alt="CKT"></a></li>
							<li><a href="http://www.brontobikes.com" title="Bronto"><img src="img/brands/FITZ_LOGOFARM_bronto.jpg" alt="Bronto"></a></li>
							<li><a href="http://www.stoemper.com" title="Stoemper"><img src="img/brands/FITZ_LOGOFARM_stoemper.jpg" alt="Stoemper"></a></li>
							<li><a href="http://www.spartabikes.com/" title="Sparta"><img src="img/brands/FITZ_LOGOFARM_sparta.jpg" alt="Sparta"></a></li>
							<li><a href="http://www.kokua-shop.com/" title="Kokua"><img src="img/brands/FITZ_LOGOFARM_kokua.jpg" alt="Kokua"></a></li>
							<li><a href="http://www.merida-bikes.com/" title="Merida"><img src="img/brands/FITZ_LOGOFARM_meridia.jpg" alt="Merida"></a></li>
							<li><a href="http://www.revenbikes.com/" title="Reven"><img src="img/brands/FITZ_LOGOFARM_reven.jpg" alt="Reven"></a></li>			
						</ul>
					</section>
				</article>
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

		<script>
			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']]; ( function(d, t) {
					var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
					g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
					s.parentNode.insertBefore(g, s)
				}(document, 'script'));
		</script>
	</body>
</html>
