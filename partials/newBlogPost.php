<?php 
	include "error.php";
	include "database.php";


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


<!--
var_dump ($data);

$currentUser = array();

foreach($data as $key=>$value){
	$currentUser[count($currentUser)] = $key;
}

echo $currentUser[1];
-->