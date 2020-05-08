<?php
    session_start();
    include "connection.php";
    if(isset($_GET["comm_submit"]))
    {
      $card=$_SESSION["card"];
      $opt=$_SESSION["option"];
      $comment=$_GET["comment"];
      $count=0;

      $recent_comm = "select * from comments order by comm_no desc";
      $result1 = mysqli_query($conn, $recent_comm);
      $row1 = mysqli_fetch_assoc($result1);
      $max_no = $row1["comm_no"];
      $max_no++;

      $query="select * from article order by article_id desc";
      $result=mysqli_query($conn, $query);
      while($card>=$count) {
        $row2 = mysqli_fetch_assoc($result);
        $count=$count+1;
      }
      $id = $row2["article_id"];
      $add_comment = "insert into comments values($max_no, '$comment', $id)";
      $result2 = mysqli_query($conn, $add_comment);
      header("location:display_article.php?card=$card&option=$opt");
    } 
?>
