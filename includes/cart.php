<?php include("includes.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <title>Shoes Unlimited | Shopping Cart</title>

  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="../style/cart.css">
  

</head>
<body>
    

  


<!-- ------------------ SCHOES CART START --------------------- -->
<div class="wrapper">
  <div class="wrapper_content">


            
<?php 
 
  $my_product->display_all_shoes_from('XML/cart.xml');
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


    <?php $my_product->priceDetails(); ?>


</div>
<!-- ------------------ SCHOES PRICE DETAILS END --------------------- -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>