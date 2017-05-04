






<?php
	include "header.php";  
	include "error.php";
	include "database.php";
	include "newBlog.php";

$st = $pdo->prepare("SELECT * FROM blogpost INNER JOIN user ON blogpost.userID = user.id");  
$st->execute();
	
$data = $st->fetchAll(PDO::FETCH_ASSOC);
echo "<ul>";
foreach ($data as $row)
{ ?>
	<li> <?php echo $row["username"] . "<br />\n " . "Created at " . $row['createdAt'] . "<br />\n " . $row['title'] . "<br /> \n " . $row['post']; ?> </li>
	<form action="editPost.php" method="GET">
		<button type="submit" id="likeThis">Like</button>
		<button type="submit" id="editThis">Edit</button>
		<button type="submit" id="deleteThis">Delete</button>
	</form><br /><br />

<?php } 
echo "</ul>";
?>


<?php include "footer.php"; 
