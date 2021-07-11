<?php 

class Cart {


  public function cart_template(){

    $this->documents = new DomDocument;
    $this->documents->load('cart.xml');

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
      
      echo "<div class='cartRemove'><button class='cartRemove' id='cartRemove' name='cartRemove'> REMOVE </button> </div>";   
      echo "<div class='moveToWishList'><button class='moveToWishList' id='moveToWishList' name='moveToWishList'> MOVE TO WISHLIST </button> </div>";
      echo "</div></div>";
      echo "</form>";
    }
    
}

}



$cart = new Cart();









?>