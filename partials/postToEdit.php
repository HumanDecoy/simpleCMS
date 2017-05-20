<?php
include "../class/EditBlogPost.php";

//Gets the data from the form in editPost.php
$editTitle = $_POST['editTitle'];
$editPost = $_POST['editPost'];
$editPostId = $_POST['editPostId'];

//Function with arguments that updates the post from EditBlogPost.php
$editedPost = new EditBlogPost($pdo);
$editedPost->editThePost($editTitle, $editPost, $editPostId);

//Redirects back to the blog.php page when done
header("Location:/simplecms/partials/blog.php");



