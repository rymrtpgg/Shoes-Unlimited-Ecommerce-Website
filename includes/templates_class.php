<?php 

class Template {


  public function homepage_template($child_shoes) {

    foreach($child_shoes as $each_shoes) {

      $id    = $each_shoes->getElementsByTagName('id')->item(0)->nodeValue;
      $image = $each_shoes->getElementsByTagName('image')->item(0)->nodeValue;
      $name  = $each_shoes->getElementsByTagName('shoeName')->item(0)->nodeValue;
      $price_input = $each_shoes->getElementsByTagName('price')->item(0)->nodeValue;
      $color = $each_shoes->getElementsByTagName('color')->item(0)->nodeValue;
      $price_format = number_format($price_input, 2);

      echo "<div class='col-sm-4 cardBx'> ";
      echo "<form class = 'form' method='POST' action='cartMan.php'>";
      echo "<div class='card'>";
      echo "<img name='image' src=' " . $image . "' alt='nike' width='100%' height='330'>";
      echo "<p><h1 name='prodName' value ='React-Infinity-Run'> ". $name . " </h1></p>";
      echo "<p name='price' > " . $price_format . "</p>";
      echo "<p>Color: ". $color ."</p>";
      echo "<p><button type='submit' class='cartBtn' id='cartBtn' name='cartBtn'>Add to Cart</button></p>";
      echo "<p><button type='submit' class='wishBtn' id='wishBtn' name='wishBtn'>Add to WishList</button></p>";
      echo "<input type='hidden' name='id' value='".$id."'>";
      echo "<input type='hidden' name='image' value='".$image."'>";
      echo "<input type='hidden' name='prodName' value='".$name."'>";
      echo "<input type='hidden' name='price' value='".$price_input."'>";
      echo "<input type='hidden' name='color' value='".$color."'>";
      echo "</div>";
      echo "</form>";
      echo "</div>  ";      

    }
  }

  public function cart_template(){

    $this->documents = new DomDocument;
    $this->documents->load('XML/cart.xml');

    $parent_shoes = $this->documents->getElementsByTagName('shoes');
    $child_shoes  = $this->documents->getElementsByTagName('shoe');


    $itemCount = "$child_shoes->length";

    echo "<div class='header_title'>";
    echo "<div class='title'>MY SHOPPING CART :</div>";
    echo "<div class='amount'>";
    echo "<b>ITEMS ( " .$itemCount. " ) </b> ";
    echo "</div>";
    echo "</div>";   

    foreach($child_shoes as $each_shoes){

      $id    = $each_shoes->getElementsByTagName('id')->item(0)->nodeValue;
      $image = $each_shoes->getElementsByTagName('image')->item(0)->nodeValue;
      $name  = $each_shoes->getElementsByTagName('shoeName')->item(0)->nodeValue;
      $color = $each_shoes->getElementsByTagName('color')->item(0)->nodeValue;
      $price_input  = $each_shoes->getElementsByTagName('price')->item(0)->nodeValue;
      $price_format = number_format($price_input, 2);    

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
      echo "<div class='current_price'>₱" . $price_format . "  </div>";
      echo "<div class='normal_price'>₱" . $price_format  . " </div>";
      echo "<div class='discount'>10% OFF</div>";
      echo "</div>";
      
      echo "</div>";
      echo "</div>";
      echo "<input type='hidden' name='id' value='".$id."'>";        
      echo "<div class='product_btns'>";
      
      echo "<div class='cartRemove'><button class='cartRemove' id='cartRemove' name='cart_removeBtn'> REMOVE </button> </div>";   
      echo "<div class='moveToWishList'><button class='moveToWishList' id='move_to_wishlist' name='move_to_wishlist'> MOVE TO WISHLIST </button> </div>";
      echo "</div></div>";
      echo "</form>";
    }
    
}

  public function wishlist_template($child_shoes) {

    foreach($child_shoes as $each_shoes) {

      $id    = $each_shoes->getElementsByTagName('id')->item(0)->nodeValue;
      $image = $each_shoes->getElementsByTagName('image')->item(0)->nodeValue;
      $name  = $each_shoes->getElementsByTagName('shoeName')->item(0)->nodeValue;
      $price_input = $each_shoes->getElementsByTagName('price')->item(0)->nodeValue;
      $color = $each_shoes->getElementsByTagName('color')->item(0)->nodeValue;
      $price_format = number_format($price_input, 2);

      echo "<div class='col-sm-4 cardBx'> ";
      echo "<form class = 'form' method='POST' action='cartMan.php'>";
      echo "<div class='card'>";
      echo "<img name='image' src=' " . $image . "' alt='nike' width='100%' height='330'>";
      echo "<p><h1 name='prodName' value ='React-Infinity-Run'> ". $name .  " </h1></p>";
      echo "<p name='price' > " . $price_format . "</p>";
      echo "<p>Color: ". $color ."</p>";
      echo "<p><button type='submit' class='cartBtn' id='cartBtn' name='move_to_cartBtn'>Move to Cart</button></p>";
      echo "<p><button type='submit' class='removeBtn' id='removeBtn' name='wishlist_removeBtn'>Remove</button></p>";
      echo "<input type='hidden' name='id' value='".$id."'>";
      echo "<input type='hidden' name='image' value='".$image."'>";
      echo "<input type='hidden' name='prodName' value='".$name."'>";
      echo "<input type='hidden' name='price' value='".$price_input."'>";
      echo "<input type='hidden' name='color' value='".$color."'>";
      echo "</div>";
      echo "</form>";
      echo "</div>  ";      

    }
  }


function priceDetails(){

  $this->documents = new DomDocument;
  $this->documents->load('XML/cart.xml');

  $parent_shoes = $this->documents->getElementsByTagName('shoes')->item(0);
  $child_shoes  = $this->documents->getElementsByTagName('shoe');



  $tracker = '0';
  $tx = 2;
  $price = 0;
  foreach ($child_shoes as $each_shoes){
    $price = $each_shoes->getElementsByTagName('price')->item(0)->nodeValue;
    $tracker += $price;

  }

  $itemCount = "$child_shoes->length";

  if($itemCount != 0){

  $item_discount    = '25';
  $delivery_charge  = '150';
  $order_total      = $tracker - $item_discount;
  $over_all_total   = $order_total;

  }else {

  $item_discount    = '0';
  $delivery_charge  = '0';
  $order_total      = $tracker - $item_discount;
  $over_all_total   = $order_total;

  }



  echo "<div class='wrapper_amount'>";
  echo "<div class='header_title'>";
  echo "<div class='title'>TOTAL PRICE DETAILS:</div></div>";
  echo "<div class='price_details'>";
  echo "<div class='item'>";
  echo "<p>Product Total :</p>";
  echo "<p>₱ ".  number_format($tracker) ."</p></div>";
  echo "<div class='item'>";
  echo "<p>Item Discount :</p>";
  echo "<p class='green'>-₱ " . number_format($item_discount) . "</p></div>";
  
  echo "<div class='item'>";
  echo "<p>Order Total :</p>";
  echo "<p>₱ " .number_format($order_total)."</p></div>";
  echo "<div class='item'>";
  echo "<p>Delivery Charges :</p>";
  echo "<p><span style='text-decoration: line-through;'></span>₱ ".number_format($delivery_charge) ." <span class='green'>FREE</span></p></div>";
  echo "<div class='coupon'>";
  echo "<input type='text' placeholder='Enter Voucher Code'>";
  echo "<input type='submit' class='btns'></div>";
  echo "<div class='total'>";
  echo "<p>Total :</p>";
  echo "<p>₱" . number_format($over_all_total, 2) ."</p></div></div>";
  echo "<div class='checkout'>";
  echo "<a href='#' role='button' class='checkout_btn'>Place Order</a></div></div>";    
}


}
?>