<?php 
session_start();
include 'database.php';
include 'newuser.php'; 
include 'Users.php';
$pw = $_POST["password"];
$user = $_POST["username"];
$usercheck = new Users($pdo);
$selectedUser = $usercheck->getUser($user);
$hash=$selectedUser["password"];

var_dump($selectedUser);

//Login,verify password
var_dump(password_verify($pw, $hash));

if (password_verify($pw, $hash)) { 
	$_SESSION['loggedIn'] = true;
	$_SESSION['username'] = $user;
	echo "You are logged in!";
 /*
 header("Location:login.php");*/
} else { 
	echo "NO DAT IS WRÖNG LIAR"; 
}

// peter pass123
var_dump($_SESSION["username"]);





?>