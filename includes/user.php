<?php 

 session_start();
  if(!isset($_SESSION['username'])) {
    header("Location: ../index.php"); 
  }

class User {




	public function return_user() {
		global $database;

		$result_for_query = $database->query("SELECT * FROM users");
		return $result_for_query;
	}











}

?>