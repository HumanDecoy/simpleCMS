
	<?php session_start(); 
	include "partials/header.php";
	include "partials/navbar.php";


	 ?>

	 
	<h1>SHOW ALL THE BLOGS</h1><br />
	<?php include "partials/showAllBlogPosts.php"; ?>

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
	


	include "partials/footer.php";
	?> 
	

