<?php 
  include "wishlistFunction.php";
  $wishlist = new wishListCrud();
?>
<html>
<head>
  <title>WishList</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./cart.css">
</head>
    
<body>
<!-- Navbar Start -->
<?php include "navbar.php"; ?>
<!-- Navbar End -->
        
<div class="jumbotron text-center jumbotron-image shadow" style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80">
  <h1 style="color:wheat;">WISH LIST</h1>
</div>
        

  <!-- Product Start -->
  <div class="container">      
  <?php $wishlist->readWishList(); ?>
  </div>
  <!-- Product End -->   

    <!-- Footer Start -->
    <footer class="container-fluid text-center">
      <div class="container-fluid">
        <h3>HELP</h3>
          <p><a href="#">About Us</a></p>
          <p><a href="#">Contact Us</a></p>
          <p><a href="#">Privacy Policies</a></p>
          <p><a href="#">How Do I Check Out?</a></p>     
      </div>
    </footer><!-- Footer End -->        
        
  </body>
</html>