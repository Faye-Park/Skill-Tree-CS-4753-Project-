<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
require 'vendor/autoload.php';

ob_start();
session_start();

$db_connection = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d9rsujpdd41171 user=zaimztdkhiptlg password=25fe2e242db912e7638b18668ef861180124a0081ad0bd07ca7f33e1bd6c7de8 sslmode=require");
if ($db_connection->connect_error) {
    die("connection failed: " . $db_connection->connect_error);
}
$email = $_SESSION['email'];
$check = "SELECT * FROM \"siteUsers\" WHERE email='$email'";

$result = pg_query($db_connection,$check);
$row = pg_fetch_assoc($result);

$firstname = $row['firstname'];
$lastname = $row['lastname'];
$address = $row['address'];
$city = $row['city'];
$state = $row['state'];
$zipcode = $row['zipcode'];?>

<html>
	<head>
		<title>Edit Information - Skill Tree</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

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

					<header class="special container">
						<span class="icon fa-inbox"></span>
						<h2>Edit Member Information</h2>
						<p>Make any changes to your information. Don't forget to save!</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form action = "sendinfo.php" method = "POST" name="editform">
										<div class="row gtr-50">
										<?php if (isset ($_GET["signup"]) && !$_GET["signup"]): ?>
												<div class="col-12">
													<p class="erroremail" style="color: red;" id="erroremail">This email already exists. Please choose another one.</p>
												</div>
										<?php endif; ?>

											<div class="col-6 col-12-mobile">
												First name
												<input type="text" name="firstname" value="<?php echo $firstname;?>" disabled/>
											</div>
											<div class="col-6 col-12-mobile">
												Last name
												<input type="text" name="lastname" value="<?php echo $lastname;?>" disabled/>
											</div>
											<div class="col-12">
												Email
												<input type="text" name="email" value="<?php echo $email;?>" disabled/>
											</div>
											<div class="col-12">
												Address
												<input type="text" name="address" value="<?php echo $address;?>" disabled/>
											</div>
											<div class="col-6 col-12-mobile">
												City
												<input type="text" name="city" value="<?php echo $city;?>" disabled/>
											</div>
											<div class="col-6 col-12-mobile">
												State <br />
												<input type="text" name="city" value="<?php echo $state;?>" disabled/>
											</div>
											<div class="col-6 col-12-mobile">
												Zipcode
												<input type="text" name="zipcode" value="<?php echo $zipcode;?>" disabled/>
											</div>
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
