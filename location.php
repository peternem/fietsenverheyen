<?php $pageName = 'locationPage'; ?>
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
		<title>Location - Fietsen Verheyen: A full Service Race, MTB and City Bicycle Shop</title>
		<meta name="description" content="Fietsen Verheyen: A full service Race, MTB and city bike shop. Serving Diest since 1998">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div class="header-container">
			<header class="wrapper clearfix">
				<?php include 'includes/main_nav_menu.php'?>
				<?php include 'includes/main_social_menu.php'?>
			</header>
		</div>

		<div class="main-container">
			<div class="main wrapper clearfix">

				<article>
					<!-- <img src="img/fitz_05.jpg" class="mainHeroImage medium"> -->
					<iframe class="googleMap" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Antwerpsestraat+26,+3290,+Diest,Belgium&amp;aq=&amp;sll=51.251601,5.001526&amp;sspn=0.911123,2.90863&amp;ie=UTF8&amp;hq=&amp;hnear=Antwerpsestraat+26,+3290+Diest,+Vlaams-Brabant,+Vlaams+Gewest,+Belgium&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed&amp;iwloc=near&amp;z=16&amp;"></iframe>
					<small class="googleMapMore clearfix"> <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Antwerpsestraat+26,+3290,+Diest,Belgium&amp;aq=&amp;sll=51.251601,5.001526&amp;sspn=0.911123,2.90863&amp;ie=UTF8&amp;hq=&amp;hnear=Antwerpsestraat+26,+3290+Diest,+Vlaams-Brabant,+Vlaams+Gewest,+Belgium&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>

					<header>
						<h1>Location</h1>
						<p>A full service Race, MTB and city bike shop. Serving Diest since 1990</p>
					</header>
					<section>
						<h2>Address</h2>
						<p>Fietsen Verheyen<br>
							Antwerpsestraat 26
							<br>
							3290, Diest, Belgium</p>

						<h2>Store Hours</h2>
						<?php include_once 'includes/hours-of-opperation.php';?>

						<h2>Phone</h2>
						<ul>
							<li>+32 13 77 78 80</li>
						</ul>
					</section>

					<!--                     <section>
					<h2>article section h2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
					</section>
					<section>
					<h2>article section h2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
					</section>
					<footer>
					<h3>article footer h3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
					</footer> -->
				</article>

				<!--  <aside>
				<h3>aside</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
				</aside> -->

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
