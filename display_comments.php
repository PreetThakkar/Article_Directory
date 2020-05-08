<?php
    function displaycomm()
    {
      include "connection.php";
      $card=$_SESSION["card"];
      $opt=$_SESSION["option"];
      $count=0;

      $query="select * from article order by article_id desc";
      $result=mysqli_query($conn, $query);
      while($card>=$count) {
        $row2 = mysqli_fetch_assoc($result);
        $count=$count+1;
      }
      $id = $row2["article_id"];

      $recent_comm = "select * from comments where article_id_fk=$id order by comm_no desc";
      $result1 = mysqli_query($conn, $recent_comm);
      while($row1 = mysqli_fetch_assoc($result1)){
        echo '<hr><p>'.$row1["comm"].'</p><hr>';
      }
    }
?>
