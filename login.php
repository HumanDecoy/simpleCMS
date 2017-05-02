<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container-fluid">
		<div class="col-12 col-sm-auto">
			<h1> Create New User </h1>
			<form action="post.php" method="POST">
				<input placeholder="Username" type="text" name="username">
				<input placeholder="Password" type="text" name="password">
				<input type="submit">
			</form>

			<?php 
			include 'error.php';
			include 'database.php';
			include 'Users.php';

			$testvaribale = new Users($pdo);
			$users=$testvaribale->getAllFrom();
			foreach ($users as $key){
				echo "<br><br> USERSNAME:" . $key["username"] . "<br> Password: " . $key["password"] . "<br> Admin: " . $key["isAdmin"] . "<br>";
				
				
			}
			?>

		</div>
	</div>
</body>
</html>