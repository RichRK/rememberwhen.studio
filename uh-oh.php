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
		<link rel="preload" href="../fonts/Poppins-Medium.woff2" as="font">
		
		<link rel="stylesheet" type="text/css" href="../master.css">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,maximum-scale=1.0">

	</head>

	<body data-page="404">

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

			<h1>Uh-oh</h1>

		</header>

		<section id="content">

			<div class="portion">
						
				<div class="segment two-thirds">

					<h2>Sorry!</h2>

					<p>It looks like the page you're looking for doesn't exist &mdash; please try picking an option from the menu above.</p>

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