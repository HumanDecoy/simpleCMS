<?php

function sendData () 
{
include 'database.php'; 
include '../class/Users.php';
include '../error.php';
$usercheck = new Users($pdo);
$selectedUser = $usercheck->getAllFrom();
$data = json_encode($selectedUser);
$sendData =json_decode($data);
var_dump($sendData);
return $sendData;
}

sendData();


?>