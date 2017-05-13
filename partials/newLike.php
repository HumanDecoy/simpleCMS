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
	$_SESSION['url'] = $_SERVER['HTTP_REFERER'];
	if($_SESSION["admin"]===true || $_SESSION["loggedIn"]===true)
	{
		header("Location:".$_SESSION['url']);
	}
	else
	{
		header("Location:/simplecms/partials/blog.php");
	}
	
}
else 
{
	$like->createNew($user,$postLikeId);
	$_SESSION['url'] = $_SERVER['HTTP_REFERER'];
	if($_SESSION["admin"]===true || $_SESSION["loggedIn"]===true)
	{
		header("Location:".$_SESSION['url']);
	}
	else
	{
		header("Location:/simplecms/partials/blog.php");
	}
}
