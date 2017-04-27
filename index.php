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
$testvaribale = new Users($pdo);


	?>
</body>
</html>
