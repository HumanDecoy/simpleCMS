<?php

include "../error.php";
include "database.php";
include "../class/EditBlogPost.php";

$currentId = $_SESSION['id'];
$thePostId=$_GET['postId'];

$currentPost = new EditBlogPost($pdo);
$thePost = $currentPost->getPost($thePostId);
header("Location:deletePost.php?postId='. $row['id']")


/*
foreach ($thePost as $row)
{ 
  echo '
    <h1>Title: '.$row['title'].'</h1><br />
	<p>Blogpost: '.$row['post'].'</p><br />
  ';
}
echo'
  <h1>Are you sure you want to delete this post?</h1>
  <a href="deletePost.php?postId='. $row['id'] .'"><button class=" btn btn-lg btn-primary" type="submit" id="deleteThis">YES</button></a>
  <a href="blog.php"><button class=" btn btn-lg btn-danger" type="submit" id="deleteThis">NO</button></a>
';*/