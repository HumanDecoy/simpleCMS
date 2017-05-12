<?php


include 'database.php'; 
include '../class/Users.php';
include '../error.php';
$user = $_GET['thisUser'];
$usercheck = new Users($pdo);
$selectedUser = $usercheck-> getUserArr($user);
$data = json_encode($selectedUser);

echo $data;

?>