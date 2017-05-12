<?php
session_start();
include "header.php";
include "navbar.php";
if($_SESSION["admin"]==!true){
	header("Location:/simpleCMS/index.php");
}



?>
<div class="container">

	<h1 align="center"> Welcome to the Admin panel, <?= $_SESSION['username']; ?> </h1>


	<div class="searching">
		<h2 align="center"> Search for User </h2>

		<form class="test">
		<input align="center" class="form-control col-md-6 offset-md-3"  placeholder="Username" name="username">
		</form>
		<button id ="getUser" onclick="getSearch(document.forms[1].username.value)" class="col-md-6 offset-md-3 btn btn-lg btn-primary" >Search</button>



		<div class="adminpanel col-md-12 ">
			<button id ="getUser" onclick="getUser()" class="col-md-3 btn btn-success">Show all users</button>
			<div id="admin-block" class=row >


			</div>
		</div>









		<?php
		include "footer.php";
		?>