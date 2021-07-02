<?php 

class HOMEPAGE{
	
	function __construct()
	{
		
	}

	function cardDisplay() {

 
          $price = 1000;
          $prodName = "Nike Fly.By Mids";
          $description = "Graphic tri-toned mid-high basketball shoes, Rubber outsole with wavy traction pattern";
            echo "<div class='product_wrap'> ";
            echo "<div class='product_info'>";
            echo "<div class='product_img'>" ;
            echo "<img src='img/nike1.jpg' alt='ProductImage' width='200px' height='200px'>";
            echo "</div>";
                     
            echo "<div class='product_data'>";
            echo "<div class='description'>";
            echo "<div class='main_header'> " . $prodName ." </div>";
            echo "<div class='sub_header'>";
            echo  $description;
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