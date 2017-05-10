<?php
include "../error.php";
include "database.php";

$st = $pdo->prepare("SELECT blogpost.id, blogpost.title, blogpost.post, blogpost.userID, blogpost.createdAt, user.username FROM blogpost INNER JOIN user ON blogpost.userID = user.id");  
/*
ISTÄLLET FÖR INNER JOIN ? -->

SELECT blogpost.id, title, post, userID, blogpost.createdAt, username , isAdmin FROM blogpost INNER JOIN user ON blogpost.userID = user.id WHERE userID = 'VARIABELN'
*/

$st->execute();
	
$data = $st->fetchAll(PDO::FETCH_ASSOC);
foreach (array_reverse($data) as $row)
{ ?>
	<div> 
	<?php 
		echo '
		<h1>'.$row['title'].'</h1>
		<h3>By: '.$row["username"].' Created at: '.$row['createdAt'].'</h3>
		<p>'.$row['post'].'</p>
		<img src="pictures/thumb-up.png" class="img-fluid" alt="Responsive image"><br/><br />
		';
	?> 
	</div>
	

<?php } 