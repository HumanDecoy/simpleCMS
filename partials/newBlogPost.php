<?php 
	session_start();
	
	include "../error.php";
	include "database.php";
	include "../class/blogPost.php";
	
	$userid = $_SESSION['id'];
	$newTitle = $_POST['newTitle'];
	$newPost = $_POST['newPost'];

	$thePost = new NewBlogPost($pdo);
	$thePost->createNew($newTitle, $newPost, $userid);
	include "footer.php";
	
