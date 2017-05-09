<?php
include "../error.php";
include "database.php";

$st = $pdo->prepare("SELECT * FROM blogpost INNER JOIN user ON blogpost.userID = user.id");  
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
		<img src="thumb-up.png" class="img-fluid" alt="Responsive image"><br/><br />
		';
	?> 
	</div>
	

<?php } 