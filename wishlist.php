<?php 
  include "includes.php";
  include "wishlistFunction.php";
  $wishlist = new wishListCrud();
?>
<html>
<head>
  <title>WishList</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/homepage.css">
  <link rel="stylesheet" href="style/wishlist.css">
</head>
    
<body>


  <!-- Product Start -->
    <div class="container">      
    <?php $wishlist->readWishList(); ?>
    </div>
  <!-- Product End -->   







<?php include("footer.php") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>