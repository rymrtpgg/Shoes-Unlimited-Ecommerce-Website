<?php
	
	include "functions.php";

	if(isset($_POST['cartBtn'])){

		$id = $_POST['id'];
		$image = $_POST['image'];
		$name = $_POST['prodName'];
		$price = $_POST['price'];
		$color = $_POST['color'];

		create($id, $image, $name, $price, $color);

	}elseif(isset($_POST['wishBtn'])){
		echo "Wishl";
	}else{
		echo "No";
	}




?>