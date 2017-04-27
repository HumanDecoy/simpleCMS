<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>simpleCMS</title>
</head>
<body>
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
</body>
</html>
