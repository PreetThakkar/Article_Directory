<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		include "navbar.php";
	?>
	<br><br><br>
	<div class="container">
	<?php
		function displayresults()
		{
			include "connection.php";
			if(isset($_GET["Search"]))
			{
				$word=$_GET["search_data"];
				$query="select * from article where title like '%$word%'";
				$result=mysqli_query($conn, $query);
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<div class="alert alert-primary" role="alert"><a href="display_article.php?card=0&option=1&title='.$row["title"].'">'.$row["title"].'</a><br></div>';
				}
			}
		}
	?>
	</div>
	<h3><?php displayresults() ?></h3>
</body>
</html>
