<?php
	function cardheader($var){
		include "connection.php";
		$count=0;
		$query="select * from article order by article_id desc";
		$result = mysqli_query($conn, $query);
		while($var>=$count)
	    {
	    	$row = mysqli_fetch_assoc($result);
	    	$count++;
	    }
        echo $row["title"];
        $title=$row;
        return $title;
		mysqli_close($conn);
	} 
?>
