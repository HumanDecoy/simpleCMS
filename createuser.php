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
?>

			<div class="container pos">

				<form action="post.php" method="POST" class="form-signin">
					<h2 class="form-signin-heading">Create new User</h2>
				
					<input id="inputUsername" class="form-control"  name="username" placeholder="Username"  required autofocus>
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

					<button class="btn btn-lg btn-primary btn-block" type="submit">Create User</button>
				</form>

			</div>



	
</body>
</html>