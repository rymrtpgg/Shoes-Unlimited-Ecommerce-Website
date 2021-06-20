<?php include "../../db/connection.php";


	if(isset($_POST['g-recaptcha-response'])){	

		$secretKey = "6LfOaMwaAAAAANLkxu4mqeRWJmWID5MTLLv6b0zE";
		$ip = $_SERVER['REMOTE_ADDR'];
		$response = $_POST['g-recaptcha-response'];
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip";
		$file = file_get_contents($url);
		$data = json_decode($file);



		if($data->success==true){

			$username = $_POST['unameup'];
			$email = $_POST['emailup'];

			// Hashing the password for secure purposes
			$password1 = sha1($_POST['passup']);
			$password2 = sha1($_POST['conf-passup']);

			
				if(isset($_POST['signupBtn'])) {

					$sql = "INSERT INTO signupAccount (username, email, password) VALUES ('$username', '$email','$password1')";
					$insertQUery = mysqli_query($conn, $sql);
					if(!$insertQUery) {
						echo "Qery problem";
					} else {
						echo "success";
					}
				} else {
					echo "Btn not exist";
				}

		}else{
			echo "Please Fill Recaptcha";
			
		}
	}else{
		echo "Recaptcha Error";
	}



?>