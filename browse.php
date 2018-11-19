<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
   session_start();

   if( isset( $_SESSION['valid'] ) ) {
   } else {
	 	header("Location: https://skill-tree-ecommerce-project.herokuapp.com/login.php?login=0");
   }
?>

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

					<header class="special container">
						<span class="icon fa-laptop"></span>
						<h2>Browse</h2>
						<p>Find a topic you want to learn about</p>
					</header>

					<!-- One -->
						<!--<section class="wrapper style4 special container medium">-->
              <div class="container">
                  <div class="row">
                      <div class="container mediumPost col-sm" align="center">
                          <h2>Java Basics - <b>$20</b></h2>
													<div class="imageprev">
														<img src="https://picsum.photos/1000/200/?random">
													</div>
                          <p>Learn the basic syntax and control flows of java <br />
														and begin your journey with programming.</p>
			      <?php $url='https://api.bitfinex.com/v1/ticker/btcusd';
					$obj=json_decode(file_get_contents($url), true);
					$dollar=$btc=0;

					$btc=$obj['last_price'];

						$dollar=1 / $btc;
					echo "20 dollars = " . round( $dollar * 20,8 )."BTC";?>
														<form action="https://test.bitpay.com/checkout" method="post" >
														  <input type="hidden" name="action" value="checkout" />
														  <input type="hidden" name="posData" value="" />
														  <input type="hidden" name="data" value="qzJcvD360bZEdUmbKOCpi0s4U+tTzkyPa/QNfPYMGLSO2eKlnr1kT8+PglGbJ/LlTM7jIIOrGRK91JWkLWEa3UEeCeIPEtDnnkT1fTU8a/7pITQmLFvxIaFuyCyasvpKk/Il8hPxwo1cX8FEksR9cEuFcqzlM8wmL8GRBQRsVBSugXMylej6inisTWkitIfwq4Q6iFqwhml1kIfKJ/C+/h3/LvopLZPhU37o2amDGPBJq1WEtMkzLwDdmldsKRRDD2j7AFkunN78Qc7ivFtEEx4dYhL4l3Lm3uiu98QZvVptLsG2cYCA2wqiNIhnQRAX" />
														  <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width:210px;" alt="BitPay, the easy way to pay with bitcoins." >
														</form>
                          <p><font size="-1">Posted by user Faye Park</font></p>
                      </div>
                      <div class="container mediumPost col-sm" align="center">
                          <h2>Stir Fry - <b>$10</b></h2>
													<div class="imageprev">
														<img src="https://picsum.photos/1001/200/?random">
													</div>
                          <p>Learn how to get great flavors from simple ingredients <br />
														using stir fry techniques.</p>
			      <?php echo "10 dollars = " . round( $dollar * 10,8 )."BTC";?>
														<form action="https://test.bitpay.com/checkout" method="post" >
														  <input type="hidden" name="action" value="checkout" />
														  <input type="hidden" name="posData" value="" />
														  <input type="hidden" name="data" value="qzJcvD360bZEdUmbKOCpi0s4U+tTzkyPa/QNfPYMGLSO2eKlnr1kT8+PglGbJ/LlEudH8LYGgxKH4lqXRqsHnl50Z/KD5APLsNIecO0yug7ab06kmueNWasyWn3jCh3DNznK5aT2KwWkDfRX2H1HULxAMd7q49m+3GsXtfXrp34oBH9kHWQkqjsdt4Aor7VSTAu1Tx7Nfe8z2+jM0Mv83Wfo8/pN9xlPUteQl6ZU+fpyQNLIc6jbUl9Y6Qcf5BglTepZDm45dK0bsleWXcO/SKiFossvREhJFsly8R1964P2QmT/ZiD7ay0hdG0VPqZc" />
														  <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width:210px;" alt="BitPay, the easy way to pay with bitcoins." >
														</form>
                          <p><font size="-1">Posted by user Richard Ohr</font></p>
                      </div>
                  </div>
              </div>

							<!-- Content -->
                            <!--<div class="row">
								<div class="col-4 col-12-narrower">
									<section>
										<header>
											<h5>Java Basics</h5>
										</header>
                                        <p>How to get started programming in Java, basic syntax.</p>
                                        <footer>
                                            <ul class="buttons">
                                                <li><a href="aboutus.html" class="button">Join</a></li>
                                            </ul>
                                            <font size=-1>Posted by user waterguy12</font>
                                        </footer>
									</section>
								</div>
								<div class="col-4 col-12-narrower">
									<section>
										<header>
											<h5>Stir Fry 101</h5>
										</header>
                                        <p>Learn about ingredients and techniques involved with stir frying.</p>
                                        <footer>
                                            <ul class="buttons">
                                                <li><a href="aboutus.html" class="button">Join</a></li>
                                            </ul>
                                            <font size=-1>Posted by user theMansIshere</font>
                                        </footer>
									</section>
                                </div>
                                <div class="col-4 col-12-narrower">
									<section>
										<header>
											<h5>Meditation for anyone</h5>
										</header>
										<p>I'll walk you through some breathing and mental exercises and help you integrate meditation into your routine.</p>
                                        <footer>
                                            <ul class="buttons">
                                                <li><a href="aboutus.html" class="button">Join</a></li>
                                            </ul>
                                            <font size=-1>Posted by user joe123</font>
                                        </footer>
                                    </section>
								</div>
                            </div>!-->

						<!--</section>-->

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
