<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "shoesUnlimited";

	$conn = mysqli_connect($host, $user, $pass) or die("Host connectio problem");
	mysqli_select_db($conn, $db) or die("Database connection problem");


?>