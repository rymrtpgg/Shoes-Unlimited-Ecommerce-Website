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
  <style type="text/css">
    a {
      text-decoration: none;
      color: white;
    }
  </style>
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


            
<?php 
  include "cartFunctions.php";
    cardDisplay();

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