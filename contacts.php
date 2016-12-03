<?php
/*Author: Alex Ball
 *This page allows contacts to be viewed. These contacts are pulled
 *from the database.
 *
 *This page is dependant on:
 *includes/portfolio-header.html
 *../secure-includes/portfolio-contacts-database-connection.php
 *../secure-includes/portfolio-display-contacts.php
 *includes/portfolio-footer.html
 */

//This part enables errors.
ini_set(‘display_errors’, 1);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<!--
	Author: Alex Ball
	This website is meant to represent my project portfolio.
	This page shows a table of my contacts.
	
	template attribution:
		Alpha by HTML5 UP
		html5up.net | @n33co
		Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	end attribution
-->



<html>
	<head>
		<title>Alex Ball's Portfolio - Contacts List</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
		<!-- My stylesheet -->
		<link rel="stylesheet" href="includes/portfolio.css" />
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Page Header -->
			<header id="header">
				<?php @include('includes/portfolio-header.html'); ?>
			</header> <!-- End Header -->

			<!-- Main -->
			<section id="main" class="container">
				<!-- Content Header -->
				<header>
					<h2>My Contacts</h2>
				</header> <!-- End Content Header -->
				
				<!-- Contacts Table -->
				<div class="box">
					<h4>Table of contacts</h4>
					<?php
					//connect to database, then create the table of contacts.
					require('../secure-includes/portfolio-contacts-database-connection.php');
					require('../secure-includes/portfolio-display-contacts.php');
					?>
				</div> <!-- End Contacts Table -->
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