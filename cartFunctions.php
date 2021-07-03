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

class cartCrud {

  function priceDetails(){


  $xml = new DomDocument;
  $xml->load('cart.xml');
  $x = $xml->getElementsByTagName('shoes')->item(0);
  $all_prod = $x->getElementsByTagName('shoe');
  $tf = 0;
  $tx = 2;
  
  foreach ($all_prod as $each_pro){
    $price = $each_pro->getElementsByTagName('price')->item(0)->nodeValue;
    $tf += $price;
    $priceFormat = number_format($tf, 2);
  }

  echo "<div class='wrapper_amount'>";
  echo "<div class='header_title'>";
  echo "<div class='title'>TOTAL PRICE DETAILS:</div></div>";
  echo "<div class='price_details'>";
  echo "<div class='item'>";
  echo "<p>Product Total :</p>";
  echo "<p>₱ ".  $priceFormat ."</p></div>";
  echo "<div class='item'>";
  echo "<p>Bag Discount :</p>";
  echo "<p class='green'>-₱25.00</p></div>";
                          
  echo "<div class='item'>";
  echo "<p>Order Total :</p>";
  echo "<p>₱8,566.25</p></div>";
  echo "<div class='item'>";
  echo "<p>Delivery Charges :</p>";
  echo "<p><span style='text-decoration: line-through;'></span>₱150.00 <span class='green'>FREE</span></p></div>";
  echo "<div class='coupon'>";
  echo "<input type='text' placeholder='Enter Voucher Code'>";
  echo "<input type='submit' class='btns'></div>";
  echo "<div class='total'>";
  echo "<p>Total :</p>";
  echo "<p>₱8,416.25</p></div></div>";
  echo "<div class='checkout'>";
  echo "<a href='#' role='button' class='checkout_btn'>Place Order</a></div></div>";    
}


function cardDisplay(){

  $xml = new DomDocument;
  $xml->load('cart.xml');
  $x = $xml->getElementsByTagName('shoes')->item(0);
  $all_prod = $x->getElementsByTagName('shoe');
  $tf = 0;
  $tx = 2;
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
    $prices = $each_pro->getElementsByTagName('price')->item(0)->nodeValue;
    $color = $each_pro->getElementsByTagName('color')->item(0)->nodeValue;
    $price = number_format($prices, 2);

    echo "<form action='cartMan.php' method='POST'>";
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
    echo "<div class='remove'><button id='cartRemove' name='cartRemove' class='cartRemove'> REMOVEs </button> </div>";
    echo "<div class='whishlist'>MOVE TO WHISHLIST</div>";
    echo "</div>";

    echo "</div>";
    echo "</form>";
    
  }
}



function cartRemove($cartId){

  $xml = new DomDocument;
  $xml->formatOutput = true;
  $xml->preserveWhiteSpace = false;     
  $xml->load('cart.xml');

  $products = $xml->getElementsByTagName('products');
  $product = $xml->getElementsByTagName('product');

  $ctr = 0;
  foreach($product as $prod){
  $old_Id = $prod->getElementsByTagName('id')->item(0)->nodeValue;

  if($cartId === $old_Id) {
    $flag = 1;
    $oldNode = $xml->getElementsByTagName('product')->item($ctr);
  }
  $ctr++;
  }

  if($flag != 0 ){

  $products->item(0)->removeChild($oldNode);
  $test = $xml->Save('cart.xml');

    if($test){
      echo "Remove: " . $cartId . "<br>"; 
      echo "Success";
    }   

  }else {
    echo "Remove failed<br>";
    echo $ctr;
  }  
}




}





?>