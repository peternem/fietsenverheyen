<?php $pageName = 'contactPage'; ?>
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
		<title>Contact - Fietsen Verheyen: A full Service Race, MTB and City Bicycle Shop</title>
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
					<img src="img/IMG_4023_TWEAKED.jpg" class="mainHeroImage medium">
					<header>
						<h1>Contact</h1>
						<p>Questions, Comments or Suggestions? Contact Us.</p>
					</header>

					<section>
						<script type="text/javascript">
							function validate(thisForm) {
								if (thisForm.senderName.value == "") {
									window.alert("Please enter your first name!");
									thisForm.senderName.focus();
									return false;
								}
								if (thisForm.senderEmail.value == "") {
									window.alert("Please enter your email address!");
									thisForm.senderEmail.focus();
									return false;
								} else {
									var emailexp = /.*\@.*\..*/;
									if (!emailexp.test(thisForm.senderEmail.value)) {
										window.alert("Invalid email address!\n\nPlease enter your correct email address!\n\nExample yourname@example.com");
										thisForm.senderEmail.focus();
										return false;
									}
								}
								if (thisForm.senderComments.value == "") {
									window.alert("Please enter a comment!");
									thisForm.senderComments.focus();
									return false;
								}
								return true;
							}

						</script>
						<div id="contactForm">

							<form action="contact-submitted.php" method="POST" onsubmit="return validate(this);">
								<p><b>Name</b></p>
								<p>
									<input type="text" name="senderName">
								</p>
								<p><b>Email</b></p>
								<p>
									<input type="text" name="senderEmail">
								</p>
								<p><b>Message</b</p>
								<p>									<textarea  name="senderComments"></textarea></p>
								<p>
									<br>
									<?php
									require_once ('recaptchalib.php');
									$publickey = "6Lchi-ASAAAAAEgYNns1Ah5TWFcPUlbX2kiTgY8M";
									// you got this from the signup page
									echo recaptcha_get_html($publickey);
									?>
									<br>
								</p>
								<p>
									<input type="submit" value="Send" name="submit">
								</p>
							</form>

					</section>
					<section>
						<h2>Store Hours</h2>
						<?php include 'includes/hours-of-opperation.php';?>

						<h2>Phone</h2>
						<ul>
							<li>+32 13 77 78 80</li>
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

		<?php include 'includes/google_analytics.php' ?>
	</body>
</html>
