<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>simpleCMS</title>
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<?php session_start(); 
	include "navbar.php";

	 ?>

	 
	<h1>SHOW ALL THE BLOGS</h1><br />
	<?php include "partials/showAllBlogPosts.php"; ?>

	<!-- EXAMPLE FOR SENDING VARIABLES OVER PAGES -->
<a href="login.php?myvar=$post"> LIKE </a>

	<?php

	?>
	<div class="container">
		

		<div class="row col-md-12">
			<h1>DIS IS FIRSTPAGE</h1>
		</div>
		<!-- EXAMPLE FOR SENDING VARIABLES OVER PAGES -->
		<div class="row row col-md-12">
			<a href="login.php?myvar=hello"> test </a>
		</div>
	




	</div>
	<?php 


	if ($_SESSION['loggedIn'] === true){
		echo "<h2> Welcome " . $_SESSION['username'] . "!</h2>";
	} 
	if($_SESSION['admin'] === true) {
		echo "<h3> overlord </h3>";
	}
	
	?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jsBootstrap/bootstrap.js"></script>


</body>
</html>