<?php 

function read() {

  $xml = new DomDocument;
  $xml->load('product.xml');
  $x = $xml->getElementsByTagName('shoes')->item(0);
  $all_prod = $x->getElementsByTagName('shoe');
  $tf = 0;

  echo "<h2>Products $all_prod->length </h2>";
      
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


  function cardDisplay() {

 
  $xml = new DomDocument;
  $xml->load('cart.xml');
  $x = $xml->getElementsByTagName('shoes')->item(0);
  $all_prod = $x->getElementsByTagName('shoe');
  $tf = 0;

  $itemCount = "$all_prod->length";

  echo "<div class='header_title'>";
  echo "<div class='title'>MY SHOPPING CART :</div>";
  echo "<div class='amount'>";
  echo "<b>ITEMS ( " .$itemCount. " ) </b> ";
  echo "</div>";
  echo "</div>";      
  foreach ($all_prod as $each_pro) {

    $id = $each_pro->getElementsByTagName('id')->item(0)->nodeValue;
    $image = $each_pro->getElementsByTagName('image')->item(0)->nodeValue;
    $name  = $each_pro->getElementsByTagName('shoeName')->item(0)->nodeValue;
    $price = $each_pro->getElementsByTagName('price')->item(0)->nodeValue;
    $color = $each_pro->getElementsByTagName('color')->item(0)->nodeValue;


            echo "<div class='product_wrap'> ";
            echo "<div class='product_info'>";
            echo "<div class='product_img'>" ;
            echo "<img src='" . $image."' alt='ProductImage' width='200px' height='200px'>";
            echo "</div>";
                     
            echo "<div class='product_data'>";
            echo "<div class='description'>";
            echo "<div class='main_header'> " . $name ." </div>";
            echo "<div class='sub_header'>";
            echo  $color;
            echo "</div>";
                         
            echo "</div>";
            echo "<div class='qty'>";
            echo "<div class='size_select'>";
            echo "<p>Size : <span>9</span></p>";
            echo "</div>";
            echo "<div class='qty_select'>";
            echo "<p>Qty : <span>1</span></p>";
            echo "</div>";
            echo "</div>";
                        
            echo "<div class='price'>";
            echo "<div class='current_price'>₱" . $price . "  </div>";
            echo "<div class='normal_price'>₱" . $price  . " </div>";
            echo "<div class='discount'>10% OFF</div>";
            echo "</div>";
                
            echo "</div>";
            echo "</div>";
            
            echo "<div class='product_btns'>";
            echo "<div class='remove'> <a href='#' role='button' class=''>REMOVE</a> </div>";
            echo "<div class='whishlist'>MOVE TO WHISHLIST</div>";
            echo "</div>";
        
            echo "</div>";
          }
  }




?>