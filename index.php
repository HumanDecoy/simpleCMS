<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>simpleCMS</title>
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<?php session_start() ;

	?>

	<!-- NAVBAR -->
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">BloggPortal</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>


			</ul>
			<ul class="nav navbar-nav navbar-right">	

				<?php
				if ($_SESSION["loggedIn"] === true){
					echo"<li class='nav-item'>
					<a class='nav-link' href='logout.php'>Logout</a>
				</li>";}
				else{
					echo"<li class='nav-item'>
					<a class='nav-link' href='login.php'>Login</a>
			
				";
					echo"<li class='nav-item'>
					<a class='nav-link' href='createuser.php'>Register</a>
				</li>";
				} ?>
			</ul>
			<form class="form-inline my-2 my-lg-0">
			</form>
		</div>
	</nav>
	<!-- END NAVBAR -->

	<h1>DIS IS FIRSTPAGE</h1>

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