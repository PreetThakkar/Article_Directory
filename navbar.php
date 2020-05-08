<nav class="navbar navbar-inverse" style="position: fixed; top: 0px; width: 100%;">
		<div class="container-fluid">
	    <div class="navbar-header">
	    	<a class="navbar-brand" href="index.php">Article Directories</a>
	    </div>
	    <ul class="nav navbar-nav">
	    	<li ><a href="index.php">Home</a></li>
	    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
		        <ul class="dropdown-menu">
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Science</a></li>
					<li><a href="#">Motivation</a></li>
		        </ul>
    		</li>
	    
	    	<button class="btn btn-danger navbar-btn" onclick="window.location.href='write_an_article.php'">Write an Article</button>
		    <form class="navbar-form navbar-left" action="article_search.php" method="get">
		    	<div class="form-group">
		      		<input type="text" name="search_data" class="form-control" placeholder="Search">
		    	</div>
		    	<button type="submit" name="Search" class="btn btn-default" onclick="window.location.href='article_search.php'">Search</button>
		    </form>
	    </ul>
	</div>
</nav>