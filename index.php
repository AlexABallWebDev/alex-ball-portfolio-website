<?php
/*Author: Alex Ball
 *This is the portfolio homepage.
 *
 *This page is dependant on:
 *portfolio-header-home.html
 *portfolio-footer.html
 */

//This part enables errors.
ini_set(‘display_errors’, 1);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<!--
	Author: Alex Ball
	This website is meant to represent my project portfolio.
	This page acts as a hub to link to my projects and other information.
	
	template attribution:
		Alpha by HTML5 UP
		html5up.net | @n33co
		Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	end attribution
-->
<html>
	<head>
		<title>Alex Ball's Portfolio - Homepage</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
		<!-- My stylesheet -->
		<link rel="stylesheet" href="includes/portfolio.css" />
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Page Header -->
			<header id="header" class="alt">
				<?php @include('includes/portfolio-header.html'); ?>
			</header> <!-- End Header -->

			<!-- Banner -->
			<section id="banner">
				<h2>Alex Ball</h2>
				<p>Software Developer and Green River College student</p>
				<ul class="actions">
					<li><a href="#recent-projects" class="button">Projects</a></li>
					<li><a href="resume.php" class="button">Resume</a></li>
				</ul>
			</section> <!-- End Banner -->

			<!-- Main -->
			<section id="main" class="container">
				
				<!-- Introduction -->
				<section class="box special">
					<header class="major">
						<h2>Introduction</h2>
						<p>Hello, I am Alex Ball. I am studying to get my BAS in Software Development
						<br />at Green River College.</p>
					</header>
				</section> <!-- End Introduction -->

				<!-- Recent Projects -->
				<section id="recent-projects" class="box special">
					<header class="major">
						<h2>My Recent Projects</h2>
						<hr />
					</header>
					<div class="features-row">
						<section>
							<a href="http://anarchy.greenrivertech.net" target="_blank">
								<img src="images/ESOL_word_card_homepage_one-third.jpg" alt="ESOL word card website"/>
							</a>
							<h3>Green River College ESOL word card website</h3>
							<p>Under construction by team Organized Anarchy, this website is intended to provide ESOL
									students with a resource for making flash cards online. This responsive website will even
									work on mobile devices so that you can practice with your flash cards anywhere that you have
									an internet connection.
							</p>
						</section>
					</div>
				</section> <!-- End Recent Projects -->

			</section> <!-- End Main -->

			<!-- Page Footer -->
			<?php @include('includes/portfolio-footer.html'); ?> <!-- End Footer -->

		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/jquery.scrollgress.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

	</body>
</html>