<?php
	include "header.php";  
	include "navbar.php";
	include "error.php";
	include "database.php";
	include "newBlog.php";

	session_start();


$st = $pdo->prepare("SELECT * FROM blogpost INNER JOIN user ON blogpost.userID = user.id");  
$st->execute();
	
$data = $st->fetchAll(PDO::FETCH_ASSOC);
echo "<h2>YOUR POSTS</h2>";

foreach (array_reverse($data) as $row)
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
