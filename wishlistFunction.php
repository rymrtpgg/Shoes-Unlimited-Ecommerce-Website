<?php 

class wishListCrud {


	// Read wish list function start
	function readWishList() {

	  $xml = new DomDocument;
	  $xml->load('wishlist.xml');
	  $x = $xml->getElementsByTagName('shoes')->item(0);
	  $all_prod = $x->getElementsByTagName('shoe');
	  $tf = 0;
	      
	  foreach ($all_prod as $each_pro) {

	    $id    = $each_pro->getElementsByTagName('id')->item(0)->nodeValue;
	    $image = $each_pro->getElementsByTagName('image')->item(0)->nodeValue;
	    $name  = $each_pro->getElementsByTagName('shoeName')->item(0)->nodeValue;
	    $price = $each_pro->getElementsByTagName('price')->item(0)->nodeValue;
	    $color = $each_pro->getElementsByTagName('color')->item(0)->nodeValue;

	    echo "<div class='container'>";
	    echo "<div class='col'>";
	    echo "<div class='col-sm-4'>";
	    echo "<div class='card'>";
	    echo "<img src='". $image ."'>";
	    echo "<h1>React-Infinity-Run</h1>";
	    echo "<p class='price'>".$price."</p>";
	    echo "<p>Color: ". $color ."</p>";
	    echo "<p><button>Add to Cart</button></p>";
	    echo "<p><button>Remove</button></p>";
	    echo "</div> "; 
	    echo "</div>";
	    echo "</div>";
	    echo "</div>";

		}
	}// Read wish list function End





}
?>