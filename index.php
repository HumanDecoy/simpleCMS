<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>simpleCMS</title>
</head>
<body>
<?php session_start() ?>

<h1>DIS IS FIRSTPAGE</h1>

<?php 
if ($_SESSION['loggedIn'] === true){
	echo "<h2> Welcome " . $_SESSION['username'] . "!</h2>";
} 
if($_SESSION['admin'] === true) {
		echo "<h3> overlord </h3>";
	}
	
?>


</body>
</html>