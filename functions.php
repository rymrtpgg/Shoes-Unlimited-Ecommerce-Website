<?php 

class Cru {


public $homepage_product;
public $cart_product;


public function display_all_products_to_homepage() {

  $this->homepage_product = new DomDocument;
  $this->homepage_product->load('product.xml');
  $shoes =    $this->homepage_product->getElementsByTagName('shoes')->item(0);
  $all_shoe = $this->homepage_product->getElementsByTagName('shoe');
  $this->read_all_shoes($all_shoe);
}


public function read_all_shoes($all_shoes) {

foreach ($all_shoes as $each_shoe) {

    $id    = $each_shoe->getElementsByTagName('id')->item(0)->nodeValue;
    $image = $each_shoe->getElementsByTagName('image')->item(0)->nodeValue;
    $name  = $each_shoe->getElementsByTagName('shoeName')->item(0)->nodeValue;
    $price = number_format($each_shoe->getElementsByTagName('price')->item(0)->nodeValue);
    $color = $each_shoe->getElementsByTagName('color')->item(0)->nodeValue;

    echo "<div class='col-sm-4 cardBx'> ";
    echo "<form class = 'form' method='POST' action='cartMan.php'>";
    echo "<div class='card'>";
    echo "<img name='image' src=' " . $image . "' alt='nike' width='100%' height='330'>";
    echo "<p><h1 name='prodName' value ='React-Infinity-Run'> ". $name . $id . " </h1></p>";
    echo "<p name='price' > " . $price . "</p>";
    echo "<p>Color: ". $color ."</p>";
    echo "<p><button type='submit' class='cartBtn' id='cartBtn' name='cartBtn'>Add to Cart</button></p>";
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
}



}

$my_product = new Cru();

class Cart extends Cru {

public function add_to_cart($id, $img, $name, $price, $color) {
    
    $xmlfile = 'cart.xml'; 
    $xmls = new DomDocument;
    $xmls->formatOutput = true;
    $xmls->preserveWhiteSpace = false;
    $xmls->load($xmlfile);
    $products = $xmls->getElementsByTagName('shoes');
    $product  = $xmls->getElementsByTagName('shoe');
    $tf = 0;

    foreach($product as $prod) {
      if($prod->getElementsByTagName('id')->item(0)->nodeValue == $id){
        $tf = 1;
      }
    }

    if($tf != 0 or $tf >= 0){

      $newProd = $xmls->createELement('shoe');
      $newProd->appEndChild($xmls->createElement('id',$id));
      $newProd->appEndChild($xmls->createElement('image',$img));
      $newProd->appEndChild($xmls->createElement('shoeName', $name));
      $newProd->appEndChild($xmls->createElement('price', $price));
      $newProd->appEndChild($xmls->createElement('color', $color));
      $products->item(0)->appEndChild($newProd);    
      $this->save_porduct($xmls, $xmlfile );
}
}

public function save_porduct($doccument, $file){

  if($doccument->Save($file)) {
    echo "<script>alert('Success to add item');</script>";
    header("Location: homepage.php");
    // exit();
  }else {
    echo "<script>alert('Failed to add item');</script>";
    header("Location: homepage.php");
    // exit();
  }      


}

}

$Cart = new Cart();


class Wishlist extends Cart{

public function add_to_wishlist($id, $img, $name, $price, $color) {
    
    $xmlfile = 'wishlist.xml'; 
    $xmls = new DomDocument;
    $xmls->formatOutput = true;
    $xmls->preserveWhiteSpace = false;
    $xmls->load($xmlfile);
    $products = $xmls->getElementsByTagName('shoes');
    $product  = $xmls->getElementsByTagName('shoe');
    $tf = 0;

    foreach($product as $prod) {
      if($prod->getElementsByTagName('id')->item(0)->nodeValue == $id){
        $tf = 1;
      }
    }

    if($tf != 0 or $tf >= 0){

      $newProd = $xmls->createELement('shoe');
      $newProd->appEndChild($xmls->createElement('id',$id));
      $newProd->appEndChild($xmls->createElement('image',$img));
      $newProd->appEndChild($xmls->createElement('shoeName', $name));
      $newProd->appEndChild($xmls->createElement('price', $price));
      $newProd->appEndChild($xmls->createElement('color', $color));
      $products->item(0)->appEndChild($newProd);    
      $this->save_porduct($xmls, $xmlfile);
      }
  }
  function display(){
    echo "hello";
  }
}

$wishlist  = new Wishlist();
?>