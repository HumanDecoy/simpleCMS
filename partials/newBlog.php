<?php
	include "partials/header.php";
	include "partials/error.php";

	<form action="post.php" method="POST">
    	<input type="text" name="title">
    	<input type="textarea cols="40" rows="5"" name="blogText">
    	<input type="submit" name="postBlog" value="Post">
  	</form>


	include "partials/footer.php";