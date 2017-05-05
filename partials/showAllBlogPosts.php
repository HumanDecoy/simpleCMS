<?php
include "error.php";
include "database.php";

$st = $pdo->prepare("SELECT * FROM blogpost INNER JOIN user ON blogpost.userID = user.id");  
$st->execute();
	
$data = $st->fetchAll(PDO::FETCH_ASSOC);
foreach (array_reverse($data) as $row)
{ ?>
	<div> 
	<?php 
		echo '<h3>By: '.$row["username"].'</h3>'; 
		echo '<p>Created at: '.$row['createdAt'].'</p>'; 
		echo '<h3>'.$row['title'].'</h3>
		<form action="partials/viewPost.php" method="GET">
			<button class="btn btn-lg btn-primary">Read More</button>
		</form>
		<img src="thumb-up.png" class="img-fluid" alt="Responsive image">'.$row['likes'].'<br/><br />';
	?> 
	</div>
	

<?php } 