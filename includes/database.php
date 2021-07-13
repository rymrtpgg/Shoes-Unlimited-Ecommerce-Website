<?php 

include ("config.php");

class Database {

	public $conection;
	public $sql;
	public $username;
	public $password;
	public $email;

	public function __construct() {
		$this->define_database();
	}

	public function define_database() {

		$this->conection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('Database connection problem');

	}

	public function sql_query($sql) {

		$this->create_user();


	}

	public function find_user() {

		$username = $this->username;
		$password = $this->password;


		$sql 			= "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result 	= mysqli_query($this->conection, $sql);

		$num_rows = mysqli_num_rows($result);
		if($num_rows > 0){
			
			$row = mysqli_fetch_assoc($result);


		}

	}

	public function create_user() {

		$username = $this->username;
		$password = $this->password;
		$email 		= $this->email;

		$sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
		$this->result($sql);

	}

	public function result($sql) {
		$result_set = mysqli_query($this->conection, $sql);

		if(!$result_set) {
			echo "Database problem";
			echo "<pre>"; 
			print_r($this->conection);
			echo "</pre>";
		}else{
			echo "<script>alert('Success to connect')</script>";
			// header("Location: ../index.php");
		}
	}

}

$database = new Database();

?>