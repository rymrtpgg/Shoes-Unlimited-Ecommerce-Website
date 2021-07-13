<?php 

 session_start();
  if(!isset($_SESSION['username'])) {
    header("Location: ../index.php"); 
  }
  
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'shoes_unlimited_DB');

$conection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('Database connection problem');



?>