<?php include "includes.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHOE PROJECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../style/homepage.css">  
  <link rel="stylesheet" type="text/css" href="../style/home.css">  
</head>
<body>

<?php include("navbar.php") ?>  
  
  <div class="jumbotron text-center jumbotron-image shadow" style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80">
    <h1 style="color:wheat;">SHOES UNLIMITED</h1>
    <p style="color:wheat;">Step By Step</p> 
  </div>

  <!----------------------- Main Container Start  --------------------------->

  <div class="container contBx">
    <div class="col">


      <?php $my_product->display_all_shoes_from('XML/product.xml'); ?>

    </div>
  </div>
  <!----------------------- Main Container End  --------------------------->

<?php include("footer.php") ?>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

