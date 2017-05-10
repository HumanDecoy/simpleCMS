<?php
include 'database.php'; 
include '../class/Users.php';

$usercheck = new Users($pdo);
$selectedUser = $usercheck->getAllFrom();
var_dump($selectedUser);

?>