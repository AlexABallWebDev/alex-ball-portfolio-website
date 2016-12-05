<?php
/*Author: Alex Ball
 *This is my portfolio homepage.
 */
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
<html lang="en">
	<head>
		<title>Alex Ball's Portfolio - Homepage</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Page Header -->
			<header id="header" class="alt">
				<h1><a href="index.php">Alex Ball's Portfolio</a></h1>
				<nav id="nav">
					<ul>
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#recent-projects" class="icon fa-angle-down">Projects</a>
							<ul>
								<li><a href="#esol-word-card-website">ESOL Word Card</a></li>
								<li><a href="#password-reset-portal-website">Password Reset Portal</a></li>
								<li><a href="#swift-quiz-app">Swift Quiz App</a></li>
								<li><a href="#galaxia-unity-game">Galaxia Unity Game</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</header> <!-- End Header -->

			<!-- Banner -->
			<section id="banner">
				<h2>Alex Ball</h2>
				<p>Software Developer and Green River College student</p>
				<ul class="actions">
					<li><a href="#recent-projects" class="button">Projects</a></li>
					<li><a href="https://www.linkedin.com/in/alexaballwebdev" class="button">Linkedin</a></li>
					<li><a href="https://github.com/AlexABallWebDev" class="button">GitHub</a></li>
				</ul>
			</section> <!-- End Banner -->

			<!-- Main -->
			<section id="main" class="container">

				<!-- Introduction -->
				<section class="box special">
					<header class="major">
						<h2>Introduction</h2>
						<p>
							I am Alex Ball, and I make programs work. My strengths include
							building back-end functionality and databases. I have worked
							on several projects that are now in use, primarily websites and
							forms, but also a Unity game. My experience with Agile and pair
							programming will help me as I work on many different projects and
							collaborate with other teams. I seek to become a senior developer
							and improve everything I work on. I would love an opportunity to
							send you my resume.
						</p>
					</header>
				</section> <!-- End Introduction -->

				<!-- Recent Projects -->
				<section id="recent-projects" class="box special">
					<header class="major">
						<h2>My Projects</h2>
					</header>
				</section>

				<div class="row">
					<div class="6u 12u(narrower)">
            <section id="password-reset-portal-website" class="box special">
							<span class="image featured"><a href="http://portal.greenrivertech.net" target="_blank">
								<img src="images/password_reset_portal.png" alt="Password Reset Portal website"/>
							</a></span>
							<h3>GRC Tech Domain Password Reset Portal</h3>
							<p>
								This project by team Organized Anarchy will allow GRC students to reset their
                Active Directory password so they can log onto GRC Tech domain computers without
                having to contact an instructor. This project involved work with Active Directory,
                SSH between Redhat Enterprise (Linux) and Windows Server 2012 VMs, and a
                front-end interface for students to interact with.
							</p>
						</section>
					</div>

					<div class="6u 12u(narrower)">
						<section id="swift-quiz-app" class="box special">
							<span class="image featured"><a href="https://github.com/AlexABallWebDev/swift_quiz_game" target="_blank">
								<img src="images/swift_quiz_app.png" alt="Swift Quiz App"/>
							</a></span>
							<h3>Swift Quiz App</h3>
							<p>
								In Spring 2016 I developed a small quiz app to gain experience
								developing on Mac computers. I worked using XCode to create a
								game in which you are asked 3 randomly selected questions, after
								which you are shown your score.
							</p>
						</section>
					</div>
				</div>

				<div class="row">
					<div class="6u 12u(narrower)">
						<section id="galaxia-game" class="box special">
							<span class="image featured"><a href="http://bit.ly/1ZrUIuh" target="_blank">
								<img src="images/galaxia_remastered.png" alt="Galaxia Remastered Unity Game"/>
							</a></span>
							<h3>Galaxia Remastered Unity Game</h3>
							<p>
								Galaxia Remastered is a sequel to a game by Typhon Pacific
								Studios. It was developed using Unity in C# and was intended
								to expand upon the original game by allowing customizable
								ship parts. Over Spring quarter in 2016 we completed one level
								with two ships, but due to time constraints the customization
								features were left unfinished. The game can be downloaded by
								clicking the image above.
							</p>
						</section>
					</div>

					<div class="6u 12u(narrower)">
						<section id="meteor-uno" class="box special">
							<span class="image featured">
								<img src="images/meteor_uno.png" alt="Meteor UNO"/>
							</span>
							<h3>Meteor UNO Website</h3>
							<p>
								This project involved working with a MEAN stack framework,
								Meteor.js. The website allowed two users to play the card game
								UNO in a browser without any page refreshing required. It worked
								using a drag-and-drop system and MongoDB to manipulate cards.
								The game required 2 players to play.
							</p>
						</section>
					</div>
				</div>

				<div class="row">
					<div class="6u 12u(narrower)">
						<section id="wise-instake-form" class="box special">
							<span class="image featured"><a href="http://alexb.greenrivertech.net/305/final-project/public_html/" target="_blank">
								<img src="images/wise_intake_form.png" alt="WISE Intake Form"/>
							</a></span>
							<h3>WISE Intake Form</h3>
							<p>
								This website was created for Washington Integrated Sector
								Employment (WISE). WISE uses this website for student applications
								and to view student responses via an administrator view. This
								multipage form allows students to submit application information
								to a datbase. The student	responses can be downloaded in CSV
								form from the secure administrator page to be exported elsewhere.
							</p>
						</section>
					</div>

					<div class="6u 12u(narrower)">
						<section id="esol-word-card-website" class="box special">
							<span class="image featured"><a href="http://anarchy.greenrivertech.net" target="_blank">
								<img src="images/esol_word_card_homepage.png" alt="ESOL word card website"/>
							</a></span>
							<h3>Green River College ESOL Word Card Website</h3>
							<p>
								Under construction by team Organized Anarchy, this website is intended to provide ESOL
								students with a resource for making flash cards online. This responsive website will even
								work on mobile devices so that you can practice with your flash cards anywhere that you have
								an internet connection.
							</p>
						</section>
					</div>
				</div> <!-- End Recent Projects -->
			</section> <!-- End Main -->

			<!-- Page Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://www.linkedin.com/in/alexaballwebdev" target="_blank" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
					<li><a href="https://github.com/AlexABallWebDev" target="_blank" class="icon fa-github"><span class="label">Github</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Alex Ball. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer> <!-- End Footer -->

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
