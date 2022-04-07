<?php 

session_start();
unset($_SESSION["user"]);
unset($_SESSION["status"]);
header("location:http://localhost/./WP/mylogin.php");
?>