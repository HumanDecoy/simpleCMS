<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
</head>
<body>
<h1> Create New User </h1>
	<p> WORKING </p>

	<?php 
	include 'error.php';
include 'database.php';
include 'Users.php';
include 'login.php';
$testvaribale = new Users($pdo);
$users=$testvaribale->getAllFrom();
foreach ($users as $key){
	echo "<br><br> USERSNAME:" . $key["username"] . "<br> Password: " . $key["password"] . "<br> Admin: " . $key["isAdmin"] . "<br>";
		
	
}
	?>
	<form action="post.php" method="POST">
    <input placeholder="Username" type="text" name="username">
    <input placeholder="Password" type="text" name="password">
    <input type="submit">
  </form>
</body>
</html>