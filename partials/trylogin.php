<?php 
session_start();
include 'database.php';
include '../class/newuser.php'; 
include '../class/Users.php';


// Takes info from form and adds to variables 
$pw = $_POST["password"];
$user = $_POST["username"];
// Finds the user with the corresponding name in database
$usercheck = new Users($pdo);
$selectedUser = $usercheck->getUser($user);
// Saves hashed password and other information from database
$hash=$selectedUser["password"];
$id = $selectedUser["id"];
$adminStatus = $selectedUser["isAdmin"];


//compares form password to hash password and create session variables

if (password_verify($pw, $hash)) { 
	$_SESSION['loggedIn'] = true;
	$_SESSION['username'] = $user;
	$_SESSION['id'] = $id;
	if($adminStatus === 1 ){
		$_SESSION['admin'] = true;
	}
	else{
		$_SESSION['admin'] = false;
	}
	header("Location:/simplecms/index.php");
}
// If wrong password sends user to error file.
else { 
	header("Location:/simplecms/partials/wrongpassword.php"); 
}
?>