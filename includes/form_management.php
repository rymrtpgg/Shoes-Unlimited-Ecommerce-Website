<?php 

include ("includes.php");
session_start();
  if(!isset($_SESSION['username'])) {
    header("Location: ../index.php"); 
  }


	if(isset($_POST['signupBtn'])) {

		if($recaptcha->success_to_decode()){
 
				$username = $_POST['unameup'];
				$email		= $_POST['emailup'];
				$confirm_password = sha1($_POST['conf_passup']);
				$password 				= sha1($_POST['passup']);
				$database->username = $username;
				$database->password = $password;
				$database->email 		= $email;
				
				if($database->create_user()){
					echo "<script>alert('Success to add this user')</script>";
				}

			}
	}

	elseif($_POST['signInBtn']){

		if($recaptcha->success_to_decode()) {

				$username = $_POST['userName'];
				$password = sha1($_POST['password']);

				$sql = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";

				$result = mysqli_query($conection, $sql);
				$row_count = mysqli_num_rows($result);


				if($row_count > 0) {
					$row = mysqli_fetch_assoc($result);
					$_SESSION['username'] = $row['username'];
					$_SESSION['id'] = $row['id'];
					header("Location: homepage.php");
				}else {
					echo  "<script>alert('Woops! Email or Password is Wrong.') window.location.href = '../index.php' </script>";
				}

		}else{
	 	echo  "<script>alert('Woops! Email or Password is Wrong.') window.location.href = '../index.php' </script>";
	 }
	 }


?>