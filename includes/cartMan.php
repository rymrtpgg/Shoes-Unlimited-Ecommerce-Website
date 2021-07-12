<?php

include "includes.php";

if(isset($_POST['wishBtn'])) {
	$my_product->id = $_POST['id'];
	$my_product->img = $_POST['image'];
	$my_product->name = $_POST['prodName'];
	$my_product->price = $_POST['price'];
	$my_product->color = $_POST['color'];
	$my_product->tracker = 0;
	$my_product->add_shoes_to_this('XML/wishlist.xml');
}
elseif(isset($_POST['cartBtn'])) {

	$my_product->id = $_POST['id'];
	$my_product->img = $_POST['image'];
	$my_product->name = $_POST['prodName'];
	$my_product->price = $_POST['price'];
	$my_product->color = $_POST['color'];
	$my_product->tracker = 0;
	$my_product->add_shoes_to_this('XML/cart.xml');	
}
elseif(isset($_POST['wishlist_removeBtn'])) {

	$this_id = $_POST['id'];
	$my_product->file = 'XML/wishlist.xml';
	$my_product->counter = 0;
	$my_product->remove_item_to_this($this_id);

}
elseif(isset($_POST['cart_removeBtn'])) {

	$this_id = $_POST['id'];
	$my_product->file = 'XML/cart.xml';
	$my_product->counter = 0;
	$my_product->remove_item_to_this($this_id);

}
elseif(isset($_POST['move_to_cartBtn'])) {

	$my_product->id = $_POST['id'];
	$my_product->file = 'XML/wishlist.xml';
	$my_product->move_file = 'XML/cart.xml';
	$my_product->move_shoes();

}
elseif(isset($_POST['move_to_wishlist'])) {

	$my_product->id = $_POST['id'];
	$my_product->file = 'XML/cart.xml';
	$my_product->move_file = 'XML/wishlist.xml';
	$my_product->move_shoes();
}


?>