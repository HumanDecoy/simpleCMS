
<?php session_start(); 
include "partials/header.php";
include "partials/navbar.php";


?>


<div class='col-md-8 offset-md-2'> <br/ ><h1 align='center'>Latest Blogposts</h1><br /><br />
	
	<?php include "partials/showAllBlogPosts.php"; 
	include "partials/footer.php";
	?>
<!--
	<div class="container">
		
		<div class="row col-md-12">
			<h1>DIS IS FIRSTPAGE</h1>
		</div>
		// EXAMPLE FOR SENDING VARIABLES OVER PAGES
		<div class="row row col-md-12">
			<a href="login.php?myvar=hello"> test </a>
		</div>
	
	</div>
	
	<?php 
/*

	if ($_SESSION['loggedIn'] === true){
		echo "<h2> Welcome " . $_SESSION['username'] . "!</h2>";
	} 
	if($_SESSION['admin'] === true) {
		echo "<h3> overlord </h3>";
	}
	
*/

	
	 
	

