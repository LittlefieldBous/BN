<?php 
    require("config.php"); 
    unset($_SESSION['user']);
    header("Location: logout.html"); 
    die("Redirecting to: logout.html");
?>