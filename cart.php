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
     <style>

        
   .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

</style>
    
</head>

<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SHOES UNLIMITED</a>
    </div>
    <ul class="nav navbar-nav">
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Brands<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="#">Addidas</a></li>
          <li><a href="#">Fila</a></li>
        <li><a href="#">Nike</a></li>
        <li><a href="#">World Balance</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kids<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="#">Boy's Shoes</a></li>
          <li><a href="#">Girl's Shoes</a></li>
        </ul>
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
   
    </ul>

    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>

    
      <ul class="nav navbar-nav navbar-right">
     <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-heart-empty"></span> Wish list</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Account<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="#">Account Setting</a></li>
          <li><a href="#">Log Out</a></li>
        </ul>
    </ul>
  </div>
</nav>
    
    
    
<div class="jumbotron text-center jumbotron-image shadow" style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80">
    <div ></div>
  <h1 style="color:wheat;">SHOES UNLIMITED</h1>
  <p style="color:wheat;">Step By Step</p> 
</div>
    
    
    <div class="wrapper">

        <div class="wrapper_content">
            <div class="header_title">
                <div class="title">
                    MY SHOPPING CART :
                </div>
                <div class="amount">
                    <b>( 2 ) ITEMS</b> 
                </div>
            </div>
            <div class="product_wrap">
                <div class="product_info">
                    <div class="product_img">
                        <img src="img/nike1.jpg" alt="ProductImage" width="200px" height="200px">
                    </div>
                    <div class="product_data">
                        <div class="description">
                            <div class="main_header">
                                Nike Fly.By Mid
                            </div>
                            <div class="sub_header">
                                Graphic tri-toned mid-high basketball shoes, Rubber outsole with wavy traction pattern
                            </div>
                        </div>
                        <div class="qty">
                            <div class="size_select">
                                <p>Size : <span>9</span></p>
                            </div>
                            <div class="qty_select">
                                <p>Qty : <span>1</span></p>
                            </div>
                        </div>
                        <div class="price">
                            <div class="current_price">₱4,405.50</div>
                            <div class="normal_price">₱4,895.00</div>
                            <div class="discount">10% OFF</div>
                        </div>
                    </div>
                </div>
                <div class="product_btns">
                    <div class="remove">REMOVE</div>
                    <div class="whishlist">MOVE TO WHISHLIST</div>
                </div>
            
            </div>
            <div class="product_wrap">
                <div class="product_info">
                    <div class="product_img">
                        <img src="img/nike2.jpg" alt="ProductImage" width="200px" height="200px">
                    </div>
                    <div class="product_data">
                        <div class="description">
                            <div class="main_header">
                                Nike Air Force 1 '07 Lv8
                            </div>
                            <div class="sub_header">
                                Best for lifestyle, Recycled Canvas upper, Textile inner
                            </div>
                        </div>
                        <div class="qty">
                            <div class="size_select">
                                <p>Size : <span>9</span></p>
                            </div>
                            <div class="qty_select">
                                <p>Qty : <span>1</span></p>
                            </div>
                        </div>
                        <div class="price">
                            <div class="current_price">₱4,160.75</div>
                            <div class="normal_price">₱4,895.00</div>
                            <div class="discount">15% OFF</div>
                        </div>
                    </div>
                </div>
                <div class="product_btns">
                    <div class="remove">REMOVE</div>
                    <div class="whishlist">MOVE TO WHISHLIST</div>
                </div>
            
            </div>
            <div class="slider">
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
            </div>
        </div>        
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
</body>
</html>