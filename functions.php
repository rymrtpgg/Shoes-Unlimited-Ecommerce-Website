<?php 







function display(){
 



}


function read() {

  $xml = new DomDocument;
  $xml->load('product.xml');

  $x = $xml->getElementsByTagName('shoes')->item(0);
  $all_prod = $x->getElementsByTagName('shoe');
  $tf = 0;


  echo "<h2>Products $all_prod->length </h2>";
      



  foreach ($all_prod as $each_pro) {

    $image = $each_pro->getElementsByTagName('image')->item(0)->nodeValue;
    $name  = $each_pro->getElementsByTagName('shoeName')->item(0)->nodeValue;
    $price = $each_pro->getElementsByTagName('price')->item(0)->nodeValue;
    $color = $each_pro->getElementsByTagName('color')->item(0)->nodeValue;

    echo "<div class='col-sm-4 cardBx'> ";
    echo "<form method='POST' action='cartMan.php'>";
    echo "<div class='card'>";
    echo "<img name='image' src=' " . $image . "' alt='nike' width='100%' height='330'>";
    echo "<p><h1 name='prodName' value ='React-Infinity-Run'> ". $name ." </h1></p>";
    echo "<p name='price' > " . $price . "</p>";
    echo "<p>Color: ". $color ."</p>";
    echo "<p><button type='submit' class='cartBtn' id='cartBtn' name='cartBtn'>Add to Cart</button></p>";
    echo "<p><button type='submit' class='wishBtn' id='wishBtn' name='wishBtn'>Add to WishList</button></p>";
    // echo "<input type='hidden' name='itemName' value='React-Infinity-Run'>";
    // echo "<input type='hidden'class='itemPrice' name='itemPrice' value='3000'>";
    echo "</div>";
    echo "</form>";
    echo "</div>  ";

  }

}




?>