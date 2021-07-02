<?php session_start();

	

	if(isset($_POST['cartBtn'])){
			
		$img = $_POST['image'];
		$name = $_POST['prodName'];
		$price = $_POST['price'];
		$color = $_POST['color'];

		echo $img . $name . $price . $color;


	}elseif(isset($_POST['wishBtn'])){
		echo "Wishl";
	}else{
		echo "No";
	}




?>