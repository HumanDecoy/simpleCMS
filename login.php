<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/form.css">
</head>
<body>
	<?php 
	session_start();

// Prevents logged in user to acces login page.

/*	if($_SESSION['loggedIn'] === true){
	header("Location:index.php");
}*/

include 'error.php';
include 'database.php';
include 'Users.php';

			/*$testvaribale = new Users($pdo);
			$users=$testvaribale->getAllFrom();
			foreach ($users as $key){
				echo "<br><br> USERSNAME:" . $key["username"] . "<br> Password: " . $key["password"] . "<br> Admin: " . $key["isAdmin"] . "<br>";


			}*/
			?>

			<div class="container">

				<form action="trylogin.php" method="POST" class="form-signin">
					<h2 class="form-signin-heading">Please sign in</h2>
				
					<input id="inputUsername" class="form-control"  name="username" placeholder="Username"  required autofocus>
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				</form>

			</div>



<!--
	<div class="container-fluid">
		<div class="col-12 col-sm-auto ">
			<div class="col-12 col-sm-auto"><h1> Log In </h1></div>
			<form action="trylogin.php" method="POST">
				<div class="col-12 col-sm-auto"><input placeholder="Username" type="text" name="username"></div>
				<div class="col-12 col-sm-auto"><input placeholder="Password" type="text" name="password"></div>
				<div class="col-12 col-sm-auto"><input class="btn-info" type="submit"></div>
			</form>
		</div>
	</div>

-->



</body>
</html>