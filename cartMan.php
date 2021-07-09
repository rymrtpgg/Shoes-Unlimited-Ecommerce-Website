<?php

include "includes.php";


if(isset($_POST['cartBtn'])){

	$id = $_POST['id'];
	$image = $_POST['image'];
	$name = $_POST['prodName'];
	$price = $_POST['price'];
	$color = $_POST['color'];

	$Cart->add_to_cart($id, $image, $name, $price, $color);


}elseif(isset($_POST['cartRemove'])){

	$id = $_POST['id'];
	// $crud->cartRemove($id);
	echo "cart remove";

}elseif(isset($_POST['wishBtn'])){

	$id = $_POST['id'];
	$image = $_POST['image'];
	$name = $_POST['prodName'];
	$price = $_POST['price'];
	$color = $_POST['color'];	
	$wishlist->display();
	$wishlist->add_to_wishlist($id, $image, $name, $price, $color);
	echo $id;

}else{

	echo "No";

	exit();
}



?>