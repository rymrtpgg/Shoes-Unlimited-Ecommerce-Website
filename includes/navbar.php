<?php include "count.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>SHOE PROJECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style/nav_bar.css">
  <link rel="stylesheet" type="text/css" href="../style/tooltip.css">
  <script type="text/javascript" src="../js/ajax.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header ">
      <a class="navbar-brand " href="homepage.php">SHOES UNLIMITED</a>
      <span class="tooltiptext">Back to home</span>
    </div>

    <!-- 
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
        <li><a href="#men">Men</a></li>
        <li><a href="#women">Women</a></li>
    </ul> 
  -->

    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">

        <input type="text" id="searchText" class="form-control" placeholder="Search" name="search" onkeyup="ajaxRequest('XML/shoes_name.xml', showSuggestion)">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
        <div id="display_suggestion" class="display_suggestion"></div>
    </form>
      <ul class="nav navbar-nav navbar-right">
     <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart (<?php cartCount(); ?>)</a></li>
      <li><a href="wishlist.php"><span class="glyphicon glyphicon-heart-empty"></span> Wish list (<?php wishlistCount(); ?>)</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Account<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="developers/">The Developers</a></li>
          <li><a href="#">Account Setting</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
    </ul>
  </div>
</nav>
<!--   <div class="jumbotron text-center jumbotron-image shadow" style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80">
    <h1 style="color:wheat;">SHOES UNLIMITED</h1>
    <p style="color:wheat;">Step By Step</p> 
  </div> -->
</body>
</html>