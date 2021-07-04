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
	    $price_Format = $each_pro->getElementsByTagName('price')->item(0)->nodeValue;
	    $color = $each_pro->getElementsByTagName('color')->item(0)->nodeValue;
		  $price = number_format($price_Format, 2);    

	    echo "<div class='col-sm-4 cardBx'> ";
	    echo "<form class = 'form' method='POST' action='cartMan.php'>";
	    echo "<div class='card'>";
	    echo "<img name='image' src=' " . $image . "' alt='nike' width='100%' height='330'>";
	    echo "<p><h1 name='prodName' value ='React-Infinity-Run'> ". $name . $id . " </h1></p>";
	    echo "<p name='price' > " . $price . "</p>";
	    echo "<p>Color: ". $color ."</p>";
	    echo "<p><button type='submit' class='cartBtn' id='cartBtn' name='cartBtn'>Move to Cart</button></p>";
	    echo "<p><button type='submit' class='wishBtn' id='wishBtn' name='wishBtn'>Add to WishList</button></p>";
	    echo "<input type='hidden' name='id' value='".$id."'>";
	    echo "<input type='hidden' name='image' value='".$image."'>";
	    echo "<input type='hidden' name='prodName' value='".$name."'>";
	    echo "<input type='hidden' name='price' value='".$price."'>";
	    echo "<input type='hidden' name='color' value='".$color."'>";
	    echo "</div>";
	    echo "</form>";
	    echo "</div>  ";	
		}
	}// Read wish list function End









}
?>