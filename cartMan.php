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
	}elseif($_POST['cartRemove']){
		echo "Cart Remove";
	}else{
		echo "<script>alert('No')</script>";
		header("Location: homepage.php");
		exit();
	}




?>