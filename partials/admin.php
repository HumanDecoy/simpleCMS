<?php
session_start();
include "header.php";
include "navbar.php";
var_dump($_SESSION);
if($_SESSION["admin"]==!true){
header("Location:/simpleCMS/index.php");
				}

?>
<div class="container">

<h1 align="center"> Welcome to the Admin panel, <?= $_SESSION['username']; ?> </h1>


















<?php
include "footer.php";
?>