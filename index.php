<!DOCTYPE html>
<html lang="en">
<head>
	<title>Article</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div id="bgimg">
		<img src="Assets/pic04.png" height=80% width=80%>
	</div>
	<?php
		include "cardheader.php";
	?>
	<!-- NAVIGATION PANEL -->
	<?php 
		include "navbar.php";
	?>
	<div>
		<!---CARD 01-->
		<a href="display_article.php?card=0&option=0;"><div class="mycard" style="position:absolute; top: 150px; left: 100px;">
			<div class="card mb-3">
				<img class="card-img-top" src="Assets/pic01.png" alt="Card image cap" height=100px width=200px>
				<div class="card-body">
					<h5 class="card-title">
						<?php
							cardheader(0);
						?>
					</h5>
				</div>
			</div>
		</div></a>
		<!---CARD 01 END-->
		<!---CARD 02-->
		<a href="display_article.php?card=1&option=0;"><div class="mycard" style="position:absolute; top: 150px; left: 550px;">
			<div class="card mb-3">
				<img class="card-img-top" src="Assets/pic02.png" alt="Card image cap" height=100px width=200px>
				<div class="card-body">
					<h5 class="card-title">
						<?php
							cardheader(1);
						?>
					</h5>
				</div>
			</div>
		</div></a>
		<!---CARD 02 END-->
		<!---CARD 03-->
		<a href="display_article.php?card=2&option=0;"><div class="mycard" style="position:absolute; top: 150px; left: 1000px;">
			<div class="card mb-3">
				<img class="card-img-top" src="Assets/pic03.png" alt="Card image cap" height=100px width=200px>
				<div class="card-body">
					<h5 class="card-title">
						<?php
							cardheader(2);
						?>
					</h5>
				</div>
			</div>
		</div></a>
		<!---CARD 03 END-->
		<!---CARD 04-->
		<a href="display_article.php?card=3&option=0;"><div class="mycard" style="position:absolute; top: 400px; left: 100px;">
			<div class="card mb-3">
				<img class="card-img-top" src="Assets/pic1.png" alt="Card image cap" height=100px width=200px>
				<div class="card-body">
					<h5 class="card-title">
						<?php
							cardheader(3);
						?>
					</h5>
					<p class="card-text"></p>
				</div>
			</div>
		</div></a>
		<!---CARD 04 END-->
		<!---CARD 05-->
		<a href="display_article.php?card=4&option=0;"><div class="mycard" style="position:absolute; top: 400px; left: 550px;">
			<div class="card mb-3">
				<img class="card-img-top" src="Assets/pic01.png" alt="Card image cap" height=100px width=200px>
				<div class="card-body">
					<h5 class="card-title">
						<?php
							cardheader(4);
						?>
					</h5>
				</div>
			</div>
		</div></a>
		<!---CARD 05 END-->
		<!---CARD 06-->
		<a href="display_article.php?card=5&option=0;"><div class="mycard" style="position:absolute; top: 400px; left: 1000PX;">
			<div class="card mb-3">
				<img class="card-img-top" src="Assets/pic01.png" alt="Card image cap" height=100px width=200px>
				<div class="card-body">
					<h5 class="card-title">
						<?php
							cardheader(5);
						?>
					</h5>
				</div>
			</div>
		</div></a>
		<!---CARD 06 END-->
	</div>
</body>
</html>
