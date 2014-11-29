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
						<h1>Contact - Submitted</h1>
					</header>

					<section>
										<?php
				require_once ('recaptchalib.php');
				$privatekey = "6Lchi-ASAAAAAKkVWBp8FMfJRlWlFm3W3ubQyPEK";
				$resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

				if (!$resp -> is_valid) {
					// What happens when the CAPTCHA was entered incorrectly
					die("The reCAPTCHA wasn't entered correctly. Go back and try it again." . "(reCAPTCHA said: " . $resp -> error . ")");
				} else {
					// Your code here to handle a successful verification

					/*** EMAIL Setup***/
					$submit = stripslashes($_POST['submit']);
					$senderName = stripslashes($_POST['senderName']);
					$senderEmail = $_POST['senderEmail'];
					$senderComments = stripslashes($_POST['senderComments']);

					$subject = "Fietsen Verheyen Contact/Request Form";

					//$to ="mjpeternell@gmail.com";
					$to = "mjpeternell@gmail.com, ";
					$to .="info@fietsenverheyen.be";

					$headers = "From: Fietsen Verheyen Contact Form\r\n";
					$headers .= "Reply-To: $senderEmail\r\n";
					$headers .= "X-Mailer: PHP/" . phpversion();

					$message = "$senderName just completed the Fietsen Verheyen contact form.\n";
					$message .= "Email: $senderEmail\n";
					$message .= "Comments:\n" . wordwrap($senderComments, 70);
					;

					if (mail($to, $subject, $message, $headers)) {
						echo "<h2>Your Email was sent to Fietsen Verheyen!</h2>";
						echo "<p>Shortly, Fietsen Verheyen should be in contact with you to answer any questions you may have regarding our products.";
						echo "<br><br><h3>The following informations was emailed to Fietsen Verheyen.</h3>";
						echo "<p>$senderName</p>";
						echo "<p>$senderEmail</p>";
						echo "<p>$senderComments</p><br><br>";
					} else {
						echo "<h4>Error!</h4> <p>You have reached this page without clicking the submit button.  The Contact Fietsen Verheyen Request Form!";
					}

				}
				?>

					</section>
					<section>
						<h2>Store Hours</h2>
						<ul>
							<li>Monday - 10:00-12:00, 13:00-18:00</li>
							<li>Tuesday - closed</li>
							<li>Wednesday - 10:00-12:00, 13:00-18:00</li>
							<li>Thursday - 13:00 - 20:00</li>
							<li>Friday - 10:00-12:00, 13:00-18:00</li>
							<li>Saturday - 10:00-17:00</li>
							<li>Sunday - Closed</li>
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

