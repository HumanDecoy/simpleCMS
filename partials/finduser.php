<?php


include 'database.php'; 
include '../class/Users.php';
include '../error.php';
$usercheck = new Users($pdo);
$selectedUser = $usercheck->getAllFrom();
$data = json_encode($selectedUser);

echo $data;

?>