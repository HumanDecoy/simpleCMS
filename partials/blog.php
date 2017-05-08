<?php
session_start();

include "header.php";  
include "navbar.php";
include "error.php";
include "database.php";
include "newBlog.php";
include "../Users.php";
include "../Like.php";
$likes = new Like($pdo);
$postLikes = $likes->getAllFrom();
$username = $_SESSION['username'];
$currentUser = new Users($pdo);
$userData = $currentUser->getAllPosts($_SESSION['id']);


echo "<h2>YOUR POSTS</h2><br />";

foreach (array_reverse($userData) as $row)
	{ ?>
<div>
	<?php 
	$count = 0;
	foreach($postLikes as $likes){
		if($likes['postId'] === $row['id'] ){
			
			$count++;
		}
	}
	echo  $count . '
	<h1>'.$row['title'].'</h1>
	<p>By: '.$row['userID'].' Created at: '.$row['createdAt'].'</p>
	<p>'.$row['post'].'</p>
	<a href="newLike.php?postId='. $row['id'] .'">
		<button class="btn btn-lg btn-primary" type="submit" id="likeThis">Like</button></a><br /><br />
		<a href="editPost.php?postId='. $row['id'] .'">

			<button class="btn btn-lg btn-primary" type="submit" id="editThis">Edit</button></a>
			<br />
			<form action="deletePost.php" method="GET">
				<button class="btn btn-lg btn-primary" type="submit" id="deleteThis">Delete</button>
			</form><br /><br />
			';

			?> 
		</div>
		<?php 
	} 


	include "footer.php"; 
