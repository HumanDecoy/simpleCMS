<?php 
include 'database.php';
include 'newuser.php'; 
include 'Users.php';
$allUsers= new Users($pdo);
$oldUser = $allUsers->getUser($_POST["username"]);

if($oldUser["username"] === $_POST["username"]){
	echo "Username already taken, please try another one";
}
else{
	$hashed=password_hash($_POST["password"], PASSWORD_DEFAULT);
	$new = new Newuser($pdo);
	$new->createNew($_POST["username"],$hashed);

	header("Location:login.php");

}


?>