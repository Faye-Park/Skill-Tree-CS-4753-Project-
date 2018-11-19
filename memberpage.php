<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Browse - Skill Tree</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header" class="alt">
				<h1 id="logo"><a href="index.php">Skill Tree<span></span></a></h1>
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

			<!-- Main -->
				<article id="main">

					<section class="wrapper style3 container special-alt">
						<div class="row gtr-50">
							<div class="col-8 col-12-narrower">
								<header>
									<h2>Welcome back!</h2>
								</header>
								<p>Unlike most websites that offer videos to learn concepts, we decided to reintroduce the human
									aspect of what makes learning great. You will be connected with someone who can help answer your questions
									and guide you along in a way that a prerecorded video couldn't do. With cost-effective sessions and thousands
									of options at your finger tips, you can get help at all hours as much as you wish, or as little as you wish.
								</p>
								<footer>
									<ul class="buttons">
										<li><a href="browse.php" class="button">Browse</a></li>
									</ul>
								</footer>
							</div>
						</div>
					</section>

					<!-- One -->
						<!--<section class="wrapper style4 special container medium">-->
              <div class="container">
                  <div class="row">
                      <div class="container mediumPost col-sm" align="center">
													<h1>Member Information</h1>
                          <p><font size="-1">You can change your information here</font></p>
                      </div>
                      <div class="container mediumPost col-sm" align="center">
												<h1>Recent Transactions</h1>
												<p><font size="-1">You can change your information here</font></p>
                      </div>
                  </div>
              </div>

				</article>

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
