
<?php
session_start();

include "header.php";  
include "navbar.php";
include "../error.php";
include "database.php";
include "newBlog.php";
include "../class/Users.php";
include "../class/Like.php";
$likes = new Like($pdo);
$postLikes = $likes->getAllFrom();
$username = $_SESSION['username'];
$currentUser = new Users($pdo);
$userData = $currentUser->getAllPosts($_SESSION['id']);
?>
<div class="container">

<?php

echo " <div class='col-md-8 offset-md-2'> <h2 align='center'>YOUR POSTS</h2><br /> </div>";

foreach (array_reverse($userData) as $row)
	{ ?>

	<?php 
	$count = 0;
	foreach($postLikes as $likes){
		if($likes['postId'] === $row['id'] ){
			$count++;
		}
	}
	echo  '
	<div class="col-md-8 offset-md-2">
	<h1>'.$row['title'].'</h1>
	<p>By: '.$row['username'].' Created at: '.$row['createdAt'].'</p>
	<p>'.$row['post'].'</p>
	<a href="newLike.php?postId='. $row['id'] .'">
		<div class="row">
		<img src="/simplecms/pictures/thumb-up.png" class="img-fluid" alt="Responsive image">
		<button class="btn btn-lg btn-primary" type="submit" id="likeThis"> ['. $count  . ']</button></a> 
		<a href="editPost.php?postId='. $row['id'] .'"><button class=" btn btn-lg btn-primary" type="submit" id="editThis">Edit</button></a>
			<br />
		<a href="deletePost.php?postId='. $row['id'] .'"><button class=" btn btn-lg btn-primary" type="submit" id="deleteThis">Delete</button></a>
			<br />
			<br /><br />


			
			';

			?> 
		</div>
		</div>
		<?php 
	} 


	include "footer.php"; 
