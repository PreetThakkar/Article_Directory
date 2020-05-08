<?php
include "connection.php";
echo "Start";
if (isset($_POST["publish"]))
{
	echo "Start";
	$title=$_POST["title"];
	$body=$_POST["body"];
	$source="ArticleDirectories";
	$recent_id = "select * from article order by article_id desc";
	$result = mysqli_query($conn, $recent_id);
	$row = mysqli_fetch_assoc($result);
	$max_id = $row["article_id"];
	$max_id++;
	$insert_article = "insert into article values('$max_id', '$title', '$body', '$source', 'Fiction')";
	$result = mysqli_query($conn, $insert_article);
	mysqli_free_result($result);
	mysqli_close();
	header("Location:index.php");
}
?>
