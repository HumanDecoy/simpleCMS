<?php 
include 'database.php';
include '../class/newuser.php'; 
include '../class/Users.php';
$allUsers= new Users($pdo);
$oldUser = $allUsers->getUser($_POST["username"]);

if($oldUser["username"] === $_POST["username"]){
	header("Location:/simplecms/partials/dupuser.php");
	echo "Username already taken, please try another one";
}
else{
	$hashed=password_hash($_POST["password"], PASSWORD_DEFAULT);
	$new = new Newuser($pdo);
	$new->createNew($_POST["username"],$hashed);

	header("Location:/simplecms/partials/login.php");

}


?>