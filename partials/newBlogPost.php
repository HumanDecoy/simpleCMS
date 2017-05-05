<?php 
	include "error.php";
	include "database.php";
	session_start();


$st = $pdo->prepare("SELECT * FROM user");  
$st->execute();
	
$data = $st->fetchAll(PDO::FETCH_ASSOC);



echo "<ul>";
foreach ($data as $row)
{ ?>
	<li> <?php echo $row["id"] . " " . $row["username"]?> </li>
	

<?php } 
echo "</ul>";

?>

