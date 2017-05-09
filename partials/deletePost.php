<?php
  
  include "../class/EditBlogPost.php";
  include "../error.php";

  $currentId = $_SESSION['id'];
  $thePostId=$_GET['postId'];

  $currentPost = new EditBlogPost($pdo);
  
  $thePost = $currentPost->getPost($thePostId);

  $postToDelete = new EditBlogPost($pdo);
  
  $postToDelete->deletePost($thePostId);

  header("Location:/simplecms/partials/blog.php");