<!-- Crud -->

<?php 


//Crud class Start
class cartCrud { 




// -----Display price details function start
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
}// -----Display price details function End


// -----Read Function start 
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

    $id     = $each_pro->getElementsByTagName('id')->item(0)->nodeValue;
    $image  = $each_pro->getElementsByTagName('image')->item(0)->nodeValue;
    $name   = $each_pro->getElementsByTagName('shoeName')->item(0)->nodeValue;
    $prices = $each_pro->getElementsByTagName('price')->item(0)->nodeValue;
    $color  = $each_pro->getElementsByTagName('color')->item(0)->nodeValue;
    $price  = number_format($prices, 2);

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
    echo "<input type='hidden' name='id' value='".$id."'>";        
    echo "<div class='product_btns'>";
    // echo "<div class='remove'><button id='cartRemove' name='cartRemove' class='cartRemove'> REMOVE </button> </div>";
    
    echo "<div class='cartRemove'><button class='cartRemove' id='cartRemove' name='cartRemove'> REMOVE </button> </div>";   
    echo "<div class='moveToWishList'><button class='moveToWishList' id='moveToWishList' name='moveToWishList'> MOVE TO WISHLIST </button> </div>";
    echo "</div></div>";
    echo "</form>";
    
  }
}// -----Read Function End


// -----Delete Function start 
function cartRemove($cartId){

  $xml = new DomDocument;
  $xml->formatOutput = true;
  $xml->preserveWhiteSpace = false;     
  $xml->load('cart.xml');
  $shoes = $xml->getElementsByTagName('shoes');
  $shoe = $xml->getElementsByTagName('shoe');
  $ctr = 0;
  $flag = 0;

  foreach($shoe as $prod){

    $old_Id = $prod->getElementsByTagName('id')->item(0)->nodeValue;
    if($cartId === $old_Id) {
      
      $flag = 1;
      $oldNode = $xml->getElementsByTagName('shoe')->item($ctr);
      
    }$ctr++;
  }


  if($flag != 0 ){

    $shoes->item(0)->removeChild($oldNode);
    $test = $xml->Save('cart.xml');

    if($test){

      echo "<script>alert('Success to remove an item');</script>";
      header("Location: cart.php");
    }   
  }else {

    echo "<script>alert('Failed to remove an item');</script>";
    header("Location: cart.php");

    
  }  
}// -----Delete Function End


} //Crud class End 


?>