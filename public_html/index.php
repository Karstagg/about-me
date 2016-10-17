<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 10/12/2016
 * Time: 11:00 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/main.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/functions.js"></script>
		<script>

			$( document ).ready(function() {
				$("#aboutMe").click(function() {
					$("#about").slideToggle(function() {
						// Animation complete.
					});
				});

				$("#contactMe").click(function() {
					$("#contact").slideToggle(function() {
						// Animation complete.
					});
				});
				$("#mf").click(function() {
					$("#about").slideToggle(function() {
					});
					$("#include").load("includes/about.php #aboutP");
				})
				$("#photos").click(function() {
					$("#about").slideToggle(function() {
					});
					$("#include").load("includes/about.php #images");
				})
			});


		</script>

		<!--made using favicon-generator.com-->
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
		<link rel="manifest" href="img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<title>Data Design for Wanikani Radicals</title>
	</head>
	<body>
		<!-- the header -->
		<header>
			<div class="header-main-text">
				<h1>Matt's Page</h1>
			</div>
			<div class="header-sub-text">
				<h4><script>dateFormat()</script></h4>
			</div>
		</header>
		<!--main content-->
		<main>
			<!--begin section 1 (persona section)-->
			<div class="flexbox">
				<section>
					<h1 id="aboutMe">About me</h1>
					<div id="about">
						<p id="mf" class="includer">Matt Fisher</p>
						<p id="photos" class="includer">Photos</p>
					</div>
				</section>
				<section>
					<h1 id="contactMe">contact</h1>
					<div id="contact">

					</div>
				</section>
			</div>
			<div id="include">

			</div>
		</main>

	</body>
</html>
