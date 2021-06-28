<!DOCTYPE html>
<html>
<head>
  <title>SHOE PROJECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="style/homepage.css"> -->
  <link rel="stylesheet" type="text/css" href="style/homepage.css">  
<style>

body {
    position: relative;
  background-image: url(image/bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
        17: 39;
   .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
       max-height: 900px;
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
.cardBx {
  margin-bottom: 50px;
}


</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="homepage.php">SHOES UNLIMITED</a>
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
     <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
      <li><a href="wishlist.php"><span class="glyphicon glyphicon-heart-empty"></span> Wish list</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Account<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="#">Account Setting</a></li>
          <li><a href="#">Log Out</a></li>
        </ul>
    </ul>
  </div>
</nav>
</body>
</html>