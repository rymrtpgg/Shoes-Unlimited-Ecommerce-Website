<?php 
  include "includes.php";
  
?>
<html>
<head>
  <title>WishList</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/wishlist.css">
  <link rel="stylesheet" href="../style/homepage.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
    
<body>

<?php include("navbar.php") ?> 
  <div class="jumbotron text-center jumbotron-image shadow" style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80">
    <h1 style="color:wheat;">SHOES UNLIMITED WISHLIST</h1>
    <p style="color:wheat;">Step By Step</p> 
  </div>

  <!-- Product Start -->

    <div class="container">      
    <?php $my_product->display_all_shoes_from('XML/wishlist.xml'); ?>
    </div>

  <!-- Product End -->   


<?php  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>s
</body>
</html>