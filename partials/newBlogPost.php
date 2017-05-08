<?php 
	session_start();
	include "header.php";  
	include "navbar.php";
	include "error.php";
	include "database.php";
	include "blogPost.php";
	
	$userid = $_SESSION['id'];
	$newTitle = $_POST['newTitle'];
	$newPost = $_POST['newPost'];

	$thePost = new NewBlogPost($pdo);

	$thePost->createNew($newTitle, $newPost, $userid);

		
	header("Location:blog.php");

	/*
	$st = $pdo->prepare("INSERT INTO blogpost (title, post) VALUES ($newTitle, $newPost"); 
	$st->execute();
		
	*/






include "footer.php";



