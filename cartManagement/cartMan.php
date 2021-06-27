<?php session_start();

	$_SESSION['cart'] = "cart";

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(isset($_POST['cartBtn'])){
			if(isset($_SESSION['cart'])){
				echo "if";
				// $count = count($_SESSION['cart']);
				$arr = array('Itemname'=>$_POST['itemName'],'Price'=>$_POST['itemPrice']);
				print_r($arr);

			}else {
				echo "Else of  session cart";				
			}
		}else{
			echo "BTN NOT DEFINE";
		}
	}else{
		
		echo $_SERVER['REQUEST_METHOD'];
	}





?>