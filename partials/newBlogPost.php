<?php 
	session_start();
	include "header.php";  
	include "navbar.php";
	include "../error.php";
	include "database.php";
	include "../class/blogPost.php";
	
	$userid = $_SESSION['id'];
	$newTitle = $_POST['newTitle'];
	$newPost = $_POST['newPost'];

	$thePost = new NewBlogPost($pdo);

	$thePost->createNew($newTitle, $newPost, $userid);

		
	header("Location:/simplecms/partials/blog.php");



include "footer.php";



