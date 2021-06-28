<!DOCTYPE html>
<html lang="en">

<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <title>Shoes Unlimited | Shopping Cart</title>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="style/cart.css">
</head>

<body>
    
<?php include "navbar.php" ?>
    
<div class="jumbotron text-center jumbotron-image shadow" style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80">
    <div ></div>
  <h1 style="color:wheat;">SHOES UNLIMITED</h1>
  <p style="color:wheat;">Step By Step</p> 
</div>

<!-- ------------------ SCHOES CART START --------------------- -->
    <div class="wrapper">
        <div class="wrapper_content">

            <div class="header_title">
                <div class="title">
                    MY SHOPPING CART :
                </div>
                <div class="amount">
                    <b>ITEMS ( 1 ) </b> 
                </div>
            </div>


            <!-- PRODUCT START -->



         

            $price = 100;

            
          <?php 

 

            echo "<div class='product_wrap'> ";
            echo "<div class='product_info'>";
            echo "<div class='product_img'>" ;
            echo "<img src='img/nike1.jpg' alt='ProductImage' width='200px' height='200px'>";
            echo "</div>";
                     
            echo "<div class='product_data'>";
            echo "<div class='description'>";
            echo "<div class='main_header'>";
            echo "Nike Fly.By Mid";
            echo "</div>";
            echo "<div class='sub_header'>";
            echo "Graphic tri-toned mid-high basketball shoes, Rubber outsole with wavy traction pattern";
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
            echo "<div class='current_price'>₱  </div>";
            echo "<div class='normal_price'>₱ </div>";
            echo "<div class='discount'>10% OFF</div>";
            echo "</div>";
                
            echo "</div>";
            echo "</div>";
            
            echo "<div class='product_btns'>";
            echo "<div class='remove'>REMOVE</div>";
            echo "<div class='whishlist'>MOVE TO WHISHLIST</div>";
            echo "</div>";
        
            echo "</div>";
          
            ?>




            <!-- PRODUCT END -->


   <!--          <div class="slider">
                <div class="bg_shadow"></div>
                <div class="select_size">
                    <div class="header">
                        <div class="slider_title">Select Size</div>
                        <div class="close">X</div>
                    </div>
                    <div class="body">
                        <ul>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li class="active">9</li>
                            <li>10</li>
                        </ul>
                    </div>
                    <div class="footer">
                        <div class="button">DONE</div>
                    </div>
                </div>
                <div class="select_quantity">
                    <div class="header">
                        <div class="slider_title">Select Quantity</div>
                        <div class="close">X</div>
                    </div>
                    <div class="body">
                        <ul>
                            <li class="active">1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                        </ul>
                    </div>
                    <div class="footer">
                        <div class="button">DONE</div>
                    </div>
                </div>
            </div> -->


        </div>

<!-- ------------------ SCHOES CART END --------------------- -->


<!-- ------------------ SCHOES PRICE DETAILS START --------------------- -->
        <div class="wrapper_amount">
            <div class="header_title">
                <div class="title">
                    TOTAL PRICE DETAILS:
                </div>
            </div>
            <div class="price_details">
                <div class="item">
                    <p>Bag Total :</p>
                    <p>₱9,790</p>
                </div>
                <div class="item">
                    <p>Bag Discount :</p>
                    <p class="green">-₱25.00</p>
                </div>
                
                <div class="item">
                    <p>Order Total :</p>
                    <p>₱8,566.25</p>
                </div>
                <div class="item">
                    <p>Delivery Charges :</p>
                    <p><span style="text-decoration: line-through;"></span>₱150.00 <span class="green">FREE</span></p>
                </div>
                <div class="coupon">
                    <input type="text" placeholder="Enter Voucher Code">
                    <input type="submit" class="btns">
                </div>
                <div class="total">
                    <p>Total :</p>
                    <p>₱8,416.25</p>
                </div>
            </div>
            <div class="checkout">
                <a href="#" role="button" class="checkout_btn">Place Order</a>
            </div>
        </div>
    </div>
<!-- ------------------ SCHOES PRICE DETAILS END --------------------- -->


</body>
</html>