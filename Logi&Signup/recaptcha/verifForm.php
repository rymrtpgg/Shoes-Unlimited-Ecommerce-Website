<?php
	if(isset($_POST['g-recaptcha-response'])){	

		$secretKey = "6LfOaMwaAAAAANLkxu4mqeRWJmWID5MTLLv6b0zE";
		$ip = $_SERVER['REMOTE_ADDR'];
		$response = $_POST['g-recaptcha-response'];
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip";
		$fire = file_get_contents($url);
		$data = json_decode($fire);

		if($data->success==true){
			// header('Location: www.facebook.com');
			echo "Success";
		}else{
			echo "Please Fill Recaptcha";
			
		}
	}else{
		echo "Recaptcha Error";
	}
?>