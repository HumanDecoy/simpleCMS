<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<link rel="stylesheet" href="/simplecms/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="/simplecms/css/form.css">
</head>
<body>


	<?php 
	session_start();
	
// Prevents logged in user to acces create new user page.
	if($_SESSION['loggedIn'] === true){
		header("Location:/simplecms/index.php");
	}
?>

	<div class="container pos">

	

		<form action="/simplecms/partials/post.php" method="POST" class="form-signin">
			<h2 class="form-signin-heading">Create new User</h2>

			<input id="inputUsername" class="form-control"  name="username" placeholder="Username"  required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

			<button class="btn btn-lg btn-primary btn-block" type="submit">create user</button>
			<a href="/simplecms/index.php"  class="btn btn-lg btn-danger btn-block" >cancel</a>
		</form>

	</div>



	
</body>
</html>