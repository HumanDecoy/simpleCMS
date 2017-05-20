<?php 
session_start();
	
include "../error.php";
include "database.php";
include "../class/blogPost.php";

//Gets the arguments from the values in newBlog.php form	
$userid = $_SESSION['id'];
$newTitle = $_POST['newTitle'];
$newPost = $_POST['newPost'];

//Calls a function to insert new posts into blogpost table in database
$thePost = new NewBlogPost($pdo);
$thePost->createNew($newTitle, $newPost, $userid);

include "footer.php";
	
