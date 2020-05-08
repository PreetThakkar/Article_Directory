<!DOCTYPE html>
<html lang="en">
<head>
	<title>Write an Article</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
				$(document)
    .one('focus.autoExpand', 'textarea.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', 'textarea.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
        this.rows = minRows + rows;
    });
	</script>
	<link rel="stylesheet" type="text/css">
	</script>

	<style type="text/css">

	h4{
		font-weight: bold;
	}

	textarea
	{  
		display: block;
		box-sizing: padding-box;
		overflow: hidden;

		padding: 10px;
		width: 100%;
		font-size: 14px;
		margin: 50px auto;
		border-radius: 6px;
		box-shadow: 2px 2px 8px rgba(black, .3);
		border: 1;
}
</style>
</head>
<body>
	<div>
	<?php 
		include "navbar.php";
	?>
	</div>
	<form method="post" action="insertarticle.php">
		<div class="container">
			<br><br><br><h1 style="font-family: Comic Sans MS">Write an Article</h1><br>
			<div class="form-group">
    			<h4 for="titleInput">Title</h4>
    			<input class="form-control form-control-lg" type="text" id="titleInput" name="title" placeholder="The title of your Article">
  			</div>
  			<br>
			<h4>Category</h4>
			<div class="input-group">
			  <select class="custom-select" id="categoryselect">
			    <option selected>Choose...</option>
			    <option value="1">Science</option>
			    <option value="2">Motivation</option>
			    <option value="3">Fiction</option>
			  </select>
		    </div>
		    <br><br>
			<h4 for="Textarea1">Body</h4>
			<textarea class='autoExpand' rows='5' data-min-rows='5' placeholder='Start writing here...' name="body"></textarea>
			<button type="submit" name="publish" class="btn btn-primary btn-lg btn-block">Publish</button><br>
		</div>
	</form>
</div>
</body>
</html>