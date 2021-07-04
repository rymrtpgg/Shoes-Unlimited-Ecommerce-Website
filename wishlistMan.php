<?php 
incude "whishlistFunction.php";


if(isset($_POST['addCartBtn'])){
		$id = $_POST['id'];
		$image = $_POST['image'];
		$name = $_POST['prodName'];
		$price = $_POST['price'];
		$color = $_POST['color'];

		$crud->moveToCart($id, $image, $name, $price, $color);
}
elseif(isset($_POST['removeWishBtn'])) {

}else {

}





?>