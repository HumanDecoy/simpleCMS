<?php
include "header.php";
include "navbar.php";
include "error.php";
include "database.php";
session_start();

$st = $pdo->prepare("SELECT * FROM blogpost INNER JOIN user ON blogpost.userID = user.id");  
$st->execute();
	
$data = $st->fetchAll(PDO::FETCH_ASSOC);
echo '<h1>THE BLOGPOST YOU WANTED TO SEE</h1>';
foreach (array_reverse($data) as $row)
{ ?>
	<div> 
	<?php 
		echo '
			<h3>By: '.$row["username"].'</h3>
			<p>Created at: '.$row['createdAt'].'</p>
			<h3>'.$row['title'].'</h3>
			<p>'.$row['post'].'</p>
			<form action="addLike.php" method="POST">
				<button class="btn btn-lg btn-primary">Like</button>
			</form>
			<img src="../thumb-up.png" class="img-fluid" alt="Responsive image">'.$row['likes'].'<br/><br />
		';
	?> 
	</div>
	

<?php } 
include "footer.php";