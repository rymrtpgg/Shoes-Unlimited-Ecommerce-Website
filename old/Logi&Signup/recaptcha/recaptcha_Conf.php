<?php include "../../db/connection.php";


	 //Start of response from the recaptcha
	if(isset($_POST['g-recaptcha-response'])){	

		$secretKey = "6LfOaMwaAAAAANLkxu4mqeRWJmWID5MTLLv6b0zE";
		$ip = $_SERVER['REMOTE_ADDR'];
		$response = $_POST['g-recaptcha-response'];
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip";
		$file = file_get_contents($url);
		$data = json_decode($file);

		// Start of validating the data
		if($data->success==true){

			
			if(isset($_POST['signupBtn'])) {

				$username = $_POST['unameup'];
				$email = $_POST['emailup'];

				//Start Hashing the password for secure purposes
				$password1 = sha1($_POST['passup']);
				$password2 = sha1($_POST['conf_passup']);
				// End of Hashing the password for secure purposes					

					$sql = "INSERT INTO signupAccount (username, email, password) VALUES ('$username', '$email','$password1')";
					$insertQUery = mysqli_query($conn, $sql);
					if(!$insertQUery) {
						echo "Qery problem";
					} else {
						echo "success";
					}
			}
			elseif(isset($_POST['signInBtn'])) {

				$uname = $_POST['userName'];
				$pass = sha1($_POST['password']);

				$sql = "SELECT * FROM signupAccount WHERE username='$uname' AND password='$pass' ";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);

				if(mysqli_num_rows($result)==1) {
					if($row['username'] != $uname) {
						echo "username is wrong";
						exit();
					}elseif ($row['password'] != $pass) {
						echo "passwor is wrong";
					}else {
						if($row['username'] === $uname && $row['password'] === $pass) {
							echo "username and passwor is exist";
						}
					}
				}else {
					echo " none";
					exit();
				}
			}

			else {
					echo "Btn not exist";
				}

		}else{ echo "Please Fill Recaptcha";}// End of validating the data 

	}else{ echo "Recaptcha Error";} //End of response from the recaptcha

?>