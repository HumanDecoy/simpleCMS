<?php 
	session_start();
	include "header.php";  
	include "navbar.php";
	include "error.php";
	include "database.php";
	
	$username = $_SESSION['username'];




	$newTitle = $_POST['newTitle'];
	$newPost = $_POST['newPost'];
		
	echo $newTitle . " " . $newPost;

	/*
	$st = $pdo->prepare("INSERT INTO blogpost (title, post) VALUES ($newTitle, $newPost"); 
	$st->execute();
		
	*/






include "footer.php";



