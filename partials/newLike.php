<?php
session_start();
include "../error.php";
include "database.php";
include "../class/Like.php";
$postLikeId=$_GET['postId'];
$user = $_SESSION['id'];
$like = new Like($pdo);
$isLiked = $like->getLike($user, $postLikeId);

if ($isLiked){
	$like->deleteLike($user,$postLikeId);
	if($_SESSION["admin"]===true || $_SESSION["loggedIn"]===true && stripos($_SERVER['REQUEST_URI'], 'simplecms/index.php'))
	{
		header("Location:/simplecms/index.php");
	}
	else
	{
		header("Location:/simplecms/partials/blog.php");
	}
	
}
else 
{
	$like->createNew($user,$postLikeId);
	if($_SESSION["admin"]===true || $_SESSION["loggedIn"]===true && stripos($_SERVER['REQUEST_URI'], 'simplecms/index.php'))
	{
		header("Location:/simplecms/index.php");
	}
	else
	{
		header("Location:/simplecms/partials/blog.php");
	}
}
