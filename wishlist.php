<html>
    <head>
        <title>WishList</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./cart.css">
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
      
      <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Help<span class="caret"></span></a>-->
        <!--<ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">About us</a></li>
        </ul>-->
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
  <h1 style="color:wheat;">WISH LIST</h1>
</div>
        
        
        <div class="container">
  <div class="col">
    <div class="col-sm-4">
      
        
        <div class="card">
  <img src="C:\Users\ADMIN\Downloads\react-infinity-run-flyknit-2.jpg" alt="nike" width="300" height="330">
  <h1>React-Infinity-Run</h1>
  <p class="price">₱3,000</p>
  <p>Color: Cloud White / Core Black / Cloud Whit</p>
  <p><button>Add to Cart</button></p>
  <p><button>Remove</button></p>
    </div>
               
   </div>
    <div class="col-sm-4">
      
        <div class="card">
  <img src="C:\Users\ADMIN\Downloads\air-max-90.jpg" alt="nike" width="300" height="330">
  <h1>Air-Max-90</h1>
  <p class="price">₱4,000</p>
  <p>Color: Cloud White / Core Black / Cloud Whit</p>
  <p><button>Add to Cart</button></p>
  <p><button>Remove</button></p>
    </div>
      
    </div>
    </div>
    <div class="col-sm-4">
        
        <div class="card">
  <img src="C:\Users\ADMIN\Downloads\zion 1.jpg" alt="nike" width="300" height="330">
  <h1>Zion-1</h1>
  <p class="price">₱3,000</p>
  <p>Color: Cloud White / Core Black / Cloud Whit</p>
  <p><button>Add to Cart</button></p>
  <p><button>Remove</button></p>
    </div>
        
    </div>   
    </div>
    
    <footer class="container-fluid text-center">
  <div class="container-fluid">
  <h3>HELP</h3>
       <p><a href="#">About Us</a></p>
       <p><a href="#">Contact Us</a></p>
      <p><a href="#">Privacy Policies</a></p>
       <p><a href="#">How Do I Check Out?</a></p>     
<!--  <div class="row">
    <div class="col-sm-6" style="background-color:yellow;">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
    <div class="col-sm-6" style="background-color:pink;">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.    
    </div>
  </div>-->
</div>
</footer>        
        
    </body>
</html>