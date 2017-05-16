<?php 
include '../error.php';
include '../class/Users.php';
include 'database.php';
$userPost = new Users($pdo);
$userId=$_GET['thisUser'];


$convert = $userPost->getAllPosts($userId);

$data = json_encode($convert);
echo $data;


?>