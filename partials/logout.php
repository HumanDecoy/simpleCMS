<?php
session_start();
session_destroy();
header("Location:/simplecms/index.php");
?>