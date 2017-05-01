<?php
	include "partials/databaseA.php";

$st = $pdo->prepare("SELECT * FROM blogpost INNER JOIN user ON blogpost.userID = user.id");  
$st->execute();
	
$data = $st->fetchAll(PDO::FETCH_ASSOC);
echo "<ul>";
foreach ($data as $row)
{ ?>
	<li> <?php echo $row["username"] . "<br />\n " . "Created at " . $row['createdAt'] . "<br />\n " . $row['title'] . "<br /> \n " . $row['post']; ?> </li>
	<button>Like</button>
<?php } 
echo "</ul>";