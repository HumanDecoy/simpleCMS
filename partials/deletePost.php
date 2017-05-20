<?php
include "../class/EditBlogPost.php";
include "../error.php";

$thePostId=$_GET['postId'];//Gets the current post id

//Calls a function to delete the post
$postToDelete = new EditBlogPost($pdo);
$postToDelete->deletePost($thePostId);

  