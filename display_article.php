<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Article</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      font-family: droid serif;
    }
    .text-area{
      height: 100px;
    }
    p{
      font-size: 130%;
  }
  </style>
</head>
<body>
  <?php
    include "display_comments.php";
  ?>
  <?php 
    $vara=$_GET["card"];
    $_SESSION["card"]=$_GET["card"];
    $_SESSION["option"]=$_GET["option"];
    function article($var, $info)
    {
      include "connection.php";
      $opt=$_GET["option"];
      $count=0;
      if ($opt==0) {
        $query="select * from article order by article_id desc";  
      }
      else {
        $ttl=$_GET["title"];
        $query="select * from article where title='$ttl'";
      }
      $result=mysqli_query($conn, $query);
      while($var >= $count) {
          $row = mysqli_fetch_assoc($result);
          $count = $count + 1;
        }
        if ($info == 1) {
          echo $row["title"];
        }
        else if ($info == 2) {
          echo $row["description"];
        }
        else {
          echo $row["source"];
        }
      }
  ?>
  <?php 
    include "navbar.php";
  ?>
  <br><br><br>
  <div class="container">
    <p style="font-size:300%; color: #2c3e50 ; line-height: 100%"><?php article($vara, 1); ?><p><br>
    <p style="font-size:100%; color: #7a7d7f ; line-height: 60%"><em>By Anonymous on February 11, 2020</em></p>
    <hr>
    <br>
    <p><?php article($vara, 2); ?></p>
    <br>
    <p><div align="center"><b>References:<?php article($vara, 3); ?></b></div><br></p>
    <?php 
      displaycomm(); 
    ?>
    <form action="add_comment.php" method="get">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Comments</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your comment here..." name="comment"></textarea>
      </div>
      <button type="submit" name="comm_submit">Submit</button>
    </form>
    <br>
  </div>
</body>
</html>
