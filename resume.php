<?php
/*Author: Alex Ball
 *This page shows some of my resume information.
 *
 *
 *This page is dependant on:
 *includes/portfolio-header.html
 *includes/references.html
 *includes/portfolio-footer.html
 */

//This part enables errors.
ini_set(‘display_errors’, 1);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<!--
	Author: Alex Ball
	This page represents a simplified form of my resume.
	
	template attribution:
		Alpha by HTML5 UP
		html5up.net | @n33co
		Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	end attribution
-->



<html>
	<head>
		<title>Alex Ball's Portfolio - Resume</title>
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
					<h2>Alex Ball, Software Developer</h2>
					<h3>Objective: To secure an internship in the software development field.
					I will contribute to building a website to promote the company's future growth and success.
					</h3>
				</header> <!-- End Content Header -->
				
				<!-- Content -->
				<div class="box">
					<!--	a picture of me -->
					<img src="images/Alex_Ball_09_28_2015.JPG" alt="Photo of Alex Ball" />
					
					<!--	List of languages	-->
					<h4>I have experience with the following languages:</h4>
					<ul>
						<li>Python</li>
						<li>Java</li>
						<li>SQL</li>
						<li>HTML</li>
						<li>CSS</li>
						<li>PHP</li>
					</ul>	<!--	End List of languages	-->
					
					<!--	List of volunteer work	-->
					<h4>Past volunteer work:</h4>
					<ul>
						<li>Church youth VBS for 2014 and 2015</li>
						<li>Updating church sign for community events</li>
						<li>Community volunteer at a food bank</li>
					</ul>	<!--	End List of volunteer work	-->
					
					<!--	List of awards	-->
					<h4>Awards and Degrees:</h4>
					<ul>
						<li>Physics student award 2015</li>
						<li>Academic scholarships in 2013, 2014, and 2015</li>
						<li>Associate of Science</li>
					</ul>	<!--	End List of awards	-->
					
					<!-- Link to my LinkedIn -->
					<p><a href="https://www.linkedin.com/pub/alex-ball/105/724/b69"
						class="button" target="_blank">Visit my LinkedIn profile!</a></p> <!-- End Link to my LinkedIn -->
					
					<hr />
					<?php require('includes/references.html'); ?>
					
				</div> <!-- End Content -->
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