<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Signup - Skill Tree</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">Skill Tree <span></span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html">Home</a></li>
							<li class="current"><a href="aboutus.html">About Us</a></li>
							<li class="current"><a href="contact.html">Contact Us</a></li>
							<li class="current"><a href="login.html">Log In</a></li>
							<li><a href="signup.html" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-inbox"></span>
						<h2>Start Learning Today</h2>
						<p>Have an idea or passion you want to pursue? Begin today.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form action = "signup.php" method = "POST" name="signupform">
										<div class="row gtr-50">
											<div class="col-6 col-12-mobile">
												<input type="text" name="firstname" placeholder="First Name" />
											</div>
											<div class="col-6 col-12-mobile">
												<input type="text" name="lastname" placeholder="Last Name" />
											</div>
											<div class="col-12">
												<input type="text" name="email" placeholder="Email" />
											</div>
											<div class="col-12">
												<input type="password" name="password" placeholder="Password" />
											</div>
											<div class="col-12">
												<input type="password" name="confirmpassword" placeholder="Confirm Password" />
											</div>
											<div class="col-12">
												<ul class="buttons">
													<li><input type="submit" class="special" value="Signup" /></li>
												</ul>
											</div>
											<!--<?php $firstname="";?>
											<?php $lastname="";?>
											<?php if (isset($_POST["firstname"])) { $firstname = $_POST["firstname"]; }?>
											<?php if (isset($_POST["lastname"])) { $lastname = $_POST["lastname"];} ?>
											<div class="col-12">
												Received first name: <?php echo $firstname; ?><br>
												Received last name: <?php echo $lastname; ?>
											</div>-->
										</div>
									</form>
								</div>

						</section>

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
			<script src="assets/js/jquery.validate.min.js"></script>
			<script src="assets/js/validation.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>