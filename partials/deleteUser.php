<?php 
include '../error.php';
include '../class/Users.php';
include 'database.php';
$delete = new Users($pdo);
$userId=$_POST['userId'];


$delete->deleteUser($userId);




?>