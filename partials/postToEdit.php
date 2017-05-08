<?php
include "EditBlogPost.php";

$editTitle = $_POST['editTitle'];
$editPost = $_POST['editPost'];
$editPostId = $_POST['editPostId'];

$editedPost = new EditBlogPost($pdo);

$editedPost->editThePost($editTitle, $editPost, $editPostId);

header("Location:blog.php");



