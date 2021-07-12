<?php 


class Recaptcha {

	public function success_to_decode() {

		$secretKey 	= "6LfOaMwaAAAAANLkxu4mqeRWJmWID5MTLLv6b0zE";
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$response 	= $_POST['g-recaptcha-response'];
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip_address";
		$content  	= file_get_contents($url);
		
		$decoded_data = json_decode($content);

		if($decoded_data->success){
			return true;
		}
	}



}

$recaptcha = new Recaptcha();

?>