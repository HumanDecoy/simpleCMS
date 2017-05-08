<?php
include 
include "error.php";
include "database.php";
include "../Like.php";
session_start();
$postLikeId=$_GET['postId'];
$user = $_SESSION['id'];
$like = new Like($pdo);
$isLiked = $like->getLike($user, $postLikeId);

if ($isLiked){
	echo' NO MORE LIKES FOR YOU MAH FRIEEEND ';
}
else {
$like->createNew($user,$postLikeId);
header("Location:blog.php");
}