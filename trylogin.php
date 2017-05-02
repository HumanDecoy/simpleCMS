<?php 
include 'database.php';
include 'newuser.php'; 
include 'Users.php';
$pw = $_POST["password"];
$user = $_POST["username"];
$usercheck = new Users($pdo);
$selectedUser = $usercheck->getUser($user);
var_dump($selectedUser);
echo "Hello!" . $pw . $user ;

/*
$hashed=password_hash($_POST["password"], PASSWORD_DEFAULT);
$new = new Newuser($pdo);
$new->createNew($_POST["username"],$hashed);
header("Location:login.php");*/




?>