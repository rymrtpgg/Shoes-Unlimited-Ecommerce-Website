<?php 







function display(){
 



}


function read() {

  $xml = new DomDocument;
  $xml->load('product.xml');
  $x = $xml->getElementsByTagName('shoes')->item(0);
  $all_prod = $x->getElementsByTagName('shoe');
  $tf = 0;

      
  foreach ($all_prod as $each_pro) {

    $id = $each_pro->getElementsByTagName('id')->item(0)->nodeValue;
    $image = $each_pro->getElementsByTagName('image')->item(0)->nodeValue;
    $name  = $each_pro->getElementsByTagName('shoeName')->item(0)->nodeValue;
    $price = $each_pro->getElementsByTagName('price')->item(0)->nodeValue;
    $color = $each_pro->getElementsByTagName('color')->item(0)->nodeValue;

    echo "<div class='col-sm-4 cardBx'> ";
    echo "<form method='POST' action='cartMan.php'>";
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


function create($id, $img, $name, $price, $color) {

      $xmlfile = 'cart.xml'; 
      $xmls = new DomDocument;

      $xmls->formatOutput = true;
      $xmls->preserveWhiteSpace = false;

      $xmls->load($xmlfile);

      $products = $xmls->getElementsByTagName('shoes');
      $product = $xmls->getElementsByTagName('shoe');
      $tf = 0;


      foreach($product as $prod) {
        if($prod->getElementsByTagName('id')->item(0)->nodeValue == $id){
          $tf = 1;
        }
      }

      if($tf != 0){
        echo $tf;
        echo "Add faileds";
      }elseif($tf >= 0) {

        $newProd = $xmls->createELement('shoe');
        $newProd->appendChild($xmls->createElement('id',$id));
        $newProd->appendChild($xmls->createElement('image',$img));
        $newProd->appendChild($xmls->createElement('shoeName', $name));
        $newProd->appendChild($xmls->createElement('price', $price));
        $newProd->appendChild($xmls->createElement('color', $color));
        $products->item(0)->appendChild($newProd);

        $test = $xmls->Save('cart.xml');

        if($test) {
          echo "Success added";
          // echo $id . " " .  $name . " " . $des;
        }else {
          echo "Add failed";
          echo $id . " " .  $img . " " . $name;
        }
      }
    }

?>