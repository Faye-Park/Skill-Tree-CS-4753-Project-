<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
   session_start();
?>

<html>
	<head>
		<title>About Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="index.php">Skill Tree<span></span></a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Home</a></li>
						<li class="current"><a href="browse.php">Browse</a></li>
						<li class="current"><a href="aboutus.php">About Us</a></li>
						<li class="current"><a href="contact.php">Contact Us</a></li>
						<?php if (isset($_SESSION['valid'])): ?>
							<li class="current"><a href="logout.php">Log Out</a></li>
							<li><a href="memberpage.php" class="button primary">Member Page</a></li>
						<?php else: ?>
							<li class="current"><a href="login.php">Log In</a></li>
							<li><a href="signup.php" class="button primary">Sign Up</a></li>
						<?php endif; ?>
					</ul>
				</nav>
			</header>

			<!-- Main -->
				<article id="main">

					<header class="about container">
						<h2>About Us</h2>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>
										<div class="imageprev">
											<img src="https://picsum.photos/g/2000/400/?image=0&blur">
										</div>
										<header>
											<h3>Learning Made Easy</h3>
										</header>
										<p>The world has entered an unprecedented era of information availability. New online innovations allow anyone to find information on any topic they desire.
											However, learning a new topic or even a simple skill can be difficult without an instructor. Learning is a two-way street. The human instructor is vital in the process.</p>
										<p>Skill Tree fills this need with live, peer-to-peer instruction sessions on any topic imaginable. Anyone can sign up to be a tutor, posting an open "learning session" whenever they're available.
											This post will include the topic they want to teach, their fee, the amount of time the session will last, and the subject area of the topic (such as "cooking", "programming", or "math").
											 Users can browse open sessions and select one on a subject or skill they want to learn.
											 The user pays a fee to the tutor, the two are linked through online voice chat, and the teaching can begin. Webcams and screensharing can be used to assist either party.
											 User reviews of tutors are displayed prominently on any post they make.</p>
										<p>Our slogan, "level up your life," refers to a common theme in game design. Usually found in the RPG genre, characters become more capable ("level up") as they progress through the game.
											We believe this idea of progression can apply in real life. Learning new skills is always a positive change, and we want to make it easier for everyone to keep levelling up their own lives.
										</p>
										<ul class="buttons">
											<li><a href="signup.php" class="button primary">Sign Up Now</a></li>
										</ul>
									</section>
								</div>

						</section>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="https://github.com/Faye-Park/Skill-Tree-CS-4753-Project-" class="icon circle fa-github"><span class="label">Github</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
