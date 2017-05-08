<?php
	session_start();

	include "header.php";  
	include "navbar.php";
	include "error.php";
	include "database.php";
	include "newBlog.php";
	include "../Users.php";
	$username = $_SESSION['username'];


	$currentUser = new Users($pdo);

	$userData = $currentUser->getAllPosts($_SESSION['id']);


echo "<h2>YOUR POSTS</h2><br />";

foreach (array_reverse($userData) as $row)
{ ?>
	<div>
	<?php 
		echo '
		<h1>'.$row['title'].'</h1>
		<p>By: '.$row['userID'].' Created at: '.$row['createdAt'].'</p>
		<p>'.$row['post'].'</p>
			
		<button class="btn btn-lg btn-primary" type="submit" id="likeThis">Like</button><br /><br />
		<form action="editPost.php" method="GET">
			<button class="btn btn-lg btn-primary" type="submit" id="editThis">Edit</button>
		</form><br />
		<form action="deletePost.php" method="GET">
			<button class="btn btn-lg btn-primary" type="submit" id="deleteThis">Delete</button>
		</form><br /><br />
		';
		
	?> 
	</div>
<?php 
} 


include "footer.php"; 
