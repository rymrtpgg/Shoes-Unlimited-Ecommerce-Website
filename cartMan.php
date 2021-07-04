<?php
	
	include "cartFunctions.php";
	$crud = new cartCrud();

	if(isset($_POST['cartBtn'])){

		$id = $_POST['id'];
		$image = $_POST['image'];
		$name = $_POST['prodName'];
		$price = $_POST['price'];
		$color = $_POST['color'];

		$crud->create($id, $image, $name, $price, $color);

	}elseif(isset($_POST['cartRemove'])){

		$id = $_POST['id'];
		$crud->cartRemove($id);
		
	}else{
		
		echo "<script>alert('No')</script>";
		// header("Location: homepage.php");
		exit();
	}



?>