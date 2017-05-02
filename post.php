<?php 
include 'database.php';
include 'newuser.php'; 


$hashed=password_hash($_POST["password"], PASSWORD_DEFAULT);
$new = new Newuser($pdo);
$new->createNew($_POST["username"],$hashed);
header("Location:login.php")


?>