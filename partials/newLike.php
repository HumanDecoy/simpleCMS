<?php
include 
include "error.php";
include "database.php";
include "../Like.php";
session_start();
$postLikeId=$_GET['postId'];
$user = $_SESSION['id'];
var_dump($user);
$like = new Like($pdo);
$isLiked = $like->getLike($user, $postLikeId);
var_dump($isLiked);

if ($isLiked){
	echo' its liked:( ';
}
else {
	echo'its not liked ';
}