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
<form action="" method="POST" >
<h2 align="center"> Search for User </h2>

<input align="center" class="form-control col-md-6 offset-md-3"  name="username" placeholder="Username">
 <button class="col-md-6 offset-md-3 btn btn-lg btn-primary" type="submit">Search</button>
 </form>
</div>














<?php
include "footer.php";
?>