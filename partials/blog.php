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

	var_dump($userData);
	


echo "<h2>YOUR POSTS</h2>";

foreach (array_reverse($userData) as $row)
{ ?>
	<div>
	<?php 
		echo '<p>Created at: '.$row['createdAt'].'</p>'; 
		echo '<h3>'.$row['title'].'</h3>';
		echo '<p>'.$row['post'].'</p>
			<form action="editPost.php" method="GET">
				<button class="btn btn-lg btn-primary" type="submit" id="likeThis">Like</button>
				<button class="btn btn-lg btn-primary" type="submit" id="editThis">Edit</button>
				<button class="btn btn-lg btn-primary" type="submit" id="deleteThis">Delete</button>
			</form><br /><br />';
		
	?> 
	</div>
<?php 
} 


include "footer.php"; 
