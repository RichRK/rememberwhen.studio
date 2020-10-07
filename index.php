<?php
$year = date("Y");
?>
<!doctype html>

<html lang="en">
	
	<head>

		<title>Remember When&mdash;?</title>

		<link rel="preload" href="fonts/MaterialIcons-Regular.woff2" as="font">
		<link rel="preload" href="fonts/Spectral-Regular.woff2" as="font">
		<link rel="preload" href="fonts/Spectral-Medium.woff2" as="font">
		<link rel="preload" href="fonts/Raleway-Regular.woff2" as="font">
		<link rel="preload" href="fonts/Raleway-SemiBold.woff2" as="font">
		<link rel="preload" href="fonts/Poppins-Medium.woff2" as="font">
		
		<link rel="stylesheet" type="text/css" href="master.css">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,maximum-scale=1.0">

	</head>

	<body data-page="home">

		<nav>

			<div id="navIcon" class="unscrolled">

				<p>Menu</p>

			</div>

			<div id="pages">

				<ul>

					<i class="material-icons top-right">close</i>

					<a href="/"><i class="material-icons">home</i><li>Home</li></a>
					<a href="portfolio/"><i class="material-icons">gesture</i><li>Portfolio</li></a>
					<a href="bookings/"><i class="material-icons">event</i><li>Bookings</li></a>
					<a href="about/"><i class="material-icons">sentiment_very_satisfied</i><li>About</li></a>
					<a href="contact/"><i class="material-icons">email</i><li>Contact</li></a>

				</ul>

			</div>

		</nav>

		<header>

			<video autoplay loop muted poster="video/poster.jpg">

				<!-- Need to add WebM. -->

				<source src="video/opt.mp4" type="video/mp4">

			</video>

			<div id="logo">

				<img src="images/logo.png" alt="Remember When">

			</div>

			<h1><i class="material-icons down-arrow">keyboard_arrow_down</i></h1>

		</header>

		<section id="content">

			<div class="portion">
						
				<div class="segment text">

					<h2>Your wedding story &mdash; told by the people that know you best.</h2>

					<p>The big day is all about you! But it's also about those idiots who've been by your side the whole time. (Some call them friends and family.) I chat with them and get them talking about those embarrassing moments you'd rather forget.</p>

					<p>Occasionally the ones you want to remember too. 😇</p>

				</div>

				<div class="segment photo">

					<img src="images/still1.jpg" alt="Interview still">

				</div>

			</div>

			<div class="portion">

				<div class="segment photo">

					<img src="images/still2.jpg" alt="Interview still">

				</div>

				<div class="segment text">

					<h2>They're the heart and soul.</h2>

					<p>Let's face it, your people are what make your day unique. There's plenty you'll miss while you're cutting cakes and talking to Uncle Jack about his bad foot, but these candid moments give you a peek behind the scenes.</p>

					<p>(Which kinda means everyone gets free rein to badmouth you. 😉 )</p>

				</div>

			</div>

			<div class="portion">

				<div class="segment text">

					<h2>Nostalgia at its best.</h2>

					<p>Everyone has something great to share &mdash; it's one of the reasons I love this. But you also end up with a video that's always there to look back on.</p><p>Life gets in the way, memories can fade, but this snapshot won't go anywhere.</p>

				</div>

				<div class="segment photo">

					<img src="images/still3.jpg" alt="Interview still">

				</div>

			</div>

		</section>

		<footer>

			<span id="icon-loader"><i class="material-icons">featured_video</i></span>

			<p>Handcrafted in the Lower Mainland. 🏕️</p>

			<h6><a href="privacy/">Privacy information</a> | &copy; <?php echo $year; ?></h6>

		</footer>
		
		<script src="jquery-3.3.1.min.js"></script>
		<script src="master.js"></script>
		<script src="waypoints.js"></script>
		
	</body>
	
</html>