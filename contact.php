<?php
$year = date("Y");
?>
<!doctype html>

<html lang="en">
	
	<head>

		<title>Remember When&mdash;?</title>

		<link rel="preload" href="../fonts/Spectral-Regular.woff2" as="font">
		<link rel="preload" href="../fonts/Spectral-Medium.woff2" as="font">
		<link rel="preload" href="../fonts/Raleway-Regular.woff2" as="font">
		<link rel="preload" href="../fonts/Raleway-SemiBold.woff2" as="font">
		<link rel="preload" href="../fonts/Raleway-SemiBoldItalic.woff2" as="font">
		<link rel="preload" href="../fonts/Poppins-Medium.woff2" as="font">
		
		<link rel="stylesheet" type="text/css" href="../master.css">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,maximum-scale=1.0">

	</head>

	<body data-page="contact">

		<nav>

			<div id="navIcon" class="unscrolled">

				<p>Menu</p>

			</div>

			<div id="pages">

				<ul>

					<i class="material-icons top-right">close</i>

					<a href="../"><i class="material-icons">home</i><li>Home</li></a>
					<a href="../portfolio/"><i class="material-icons">gesture</i><li>Portfolio</li></a>
					<a href="../bookings/"><i class="material-icons">event</i><li>Bookings</li></a>
					<a href="../about/"><i class="material-icons">sentiment_very_satisfied</i><li>About</li></a>
					<a href="../contact/"><i class="material-icons">email</i><li>Contact</li></a>

				</ul>

			</div>

		</nav>

		<header>

			<h1>Contact</h1>

		</header>

		<section id="content">

			<div class="portion">

				<div class="segment two-thirds">

					<p>Have a question about how this all works? Desperate to send over a cat GIF? You're in the right place! I'll get back to you as soon as I can, usually over the next 24 hours.</p>

				</div>

			</div>

			<div class="portion">
						
				<div class="segment two-thirds">

					<form>

						<div class="submission-response">

							<i class="material-icons"></i>
							<h4></h4>
							<h5></h5>
							<button id="testing">Ok, got it</button>

						</div>

						<section class="flex-section">

							<label for="name"><span>Name</span>

								<input id="name" type="text" name="name" spellcheck="false" autocomplete="given-name">

							</label>

						</section>

						<section class="flex-section">

							<label for="email"><span>Email</span>

								<input id="email" type="email" name="email" spellcheck="false" autocomplete="email">

							</label>

						</section>

						<section class="flex-section">

							<label for="message"><span>Message</span>
								
								<textarea id="message" name="message" autocomplete="off" placeholder="Come say hi!"></textarea>

							</label>

						</section>

						<h6>Privacy info! Anything you submit here will only be used to get back in touch with you.</h6>

						<button type="button" class="primary">Send</button>

					</form>

				</div>

			</div>

		</section>

		<footer>

			<span id="icon-loader"><i class="material-icons">featured_video</i></span>

			<p>Handcrafted in the Lower Mainland. 🏕️</p>

			<h6><a href="../privacy/">Privacy information</a> | &copy; <?php echo $year; ?></h6>

		</footer>
		
		<script src="../jquery-3.3.1.min.js"></script>
		<script src="../master.js"></script>
		<script src="../waypoints.js"></script>
		
	</body>
	
</html>