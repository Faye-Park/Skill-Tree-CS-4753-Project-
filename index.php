<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Skill Tree</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.html">Skill Tree<span></span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Home</a></li>
							<li class="current"><a href="browse.php">Browse</a></li>
							<li class="current"><a href="aboutus.php">About Us</a></li>
							<li class="current"><a href="contact.php">Contact Us</a></li>
							<?php if (isset($_SESSION['valid'])): ?>
								<li class="current"><a href="logout.php">Log Out</a></li>
								<li><a href="memberpage.php" class="button primary">Sign Up</a></li>
							<?php else: ?>
								<li class="current"><a href="login.php">Log In</a></li>
								<li><a href="signup.php" class="button primary">Sign Up</a></li>
							<?php endif; ?>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>Skill Tree</h2>
						</header>
						<p>Level up your <strong>life.</strong></p>
						<footer>
							<ul class="buttons stacked">
								<li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-bar-chart-o"></span>
						<h2><strong>Skill Tree</strong> is an on demand service that matches
						<br />
						you with a person with answers <strong>you need.</strong></h2>
						<p>The process is simple: pick anything you need help with and an available mentor
						<br />
						will be able to assist you <strong>within minutes.</strong> Whether you need help with basic cooking
						<br />
						skills or a difficult math question, the possibilities are <strong>endless.</strong> You only
						<br />
						need a webcam (or screen share) to get started.
						</p>
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row gtr-50">
								<div class="col-8 col-12-narrower">

									<header>
										<h2>Learn anything <strong>today.</strong></h2>
									</header>
									<p>Unlike most websites that offer videos to learn concepts, we decided to reintroduce the human
										aspect of what makes learning great. You will be connected with someone who can help answer your questions
										and guide you along in a way that a prerecorded video couldn't do. With cost-effective sessions and thousands
										of options at your finger tips, you can get help at all hours as much as you wish, or as little as you wish.
									</p>
									<footer>
										<ul class="buttons">
											<li><a href="aboutus.html" class="button">About Us</a></li>
										</ul>
									</footer>

								</div>
								<div class="col-4 col-12-narrower imp-narrower">

									<ul class="featured-icons">
										<li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
										<li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
										<li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
										<li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
										<li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
										<li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
									</ul>

								</div>
							</div>
						</section>

					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon featured fa-clock-o"></span>
										<header>
											<h3>Work at your own pace</h3>
										</header>
										<p>Every tutor progresses at a rate that is tailored for every user. The lessons guaranteed that students can take their time while others can accelerate forward.</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>Instant Feedback</h3>
										</header>
										<p>The tutors are here to help you and guide you whenever you feel stuck or frustrated. Work through example problems with tutors to reinforce concepts.</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon featured fa-lock"></span>
										<header>
											<h3>Secure Payment</h3>
										</header>
										<p>Utilize our online payment system to ensure a safe and secure transaction. Your privacy is important to us, so we ensure your data will never be compromised.</p>
									</section>

								</div>
							</div>
						</section>

				</article>

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2>Ready to <strong>learn</strong>?</h2>
						<p>Get a <strong>FREE tutoring session</strong> for new users, and start learning today.</p>
					</header>
					<footer>
						<ul class="buttons">
							<li><a href="signup.php" class="button primary">Sign Up</a></li>
							<li><a href="login.html" class="button">Log In</a></li>
						</ul>
					</footer>

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
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
