<?php 
	
	require '../index.php';

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "shoesUnlimited";


	$conn = mysqli_connect($host, $user, $pass) or die("Host connection problem");
	mysqli_select_db($conn, $db) or die("Database problem");

	




?>