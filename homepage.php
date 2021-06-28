
<!DOCTYPE html>
<html lang="en">
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
</head>
<body>

<!----------------------- Navbar Container Start  --------------------------->
<?php include "navbar.php"; ?>
<!----------------------- Navbar Container End  --------------------------->
    
    
    
<div class="jumbotron text-center jumbotron-image shadow" style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80">
    <div ></div>
  <h1 style="color:wheat;">SHOES UNLIMITED</h1>
  <p style="color:wheat;">Step By Step</p> 
</div>
   
    
<!----------------------- Main Container Start  --------------------------->

<div class="container contBx">
    <div class="col">
      <div class="col-sm-4 cardBx">
        <form method="POST" action="cartMan.php">
          <div class="card">
            <img src="product_img/product1.png" alt="nike" width="100%" height="330" name="image">
              <p><h1 value ="React-Infinity-Run">React-Infinity-Run</h1></p>
              <p> ₱3,000 </p>
              <p>Color: Cloud White / Core Black / Cloud Whit</p>
              <p><button type="submit" class="cartBtn" id="cartBtn" name="cartBtn">Add to Cart</button></p>
              <p><button type="submit" class="wishBtn" id="wishBtn" name="wishBtn">Add to WishList</button></p>
              <input type="hidden" name="itemName" value="React-Infinity-Run">
              <input type="hidden"class="itemPrice" name="itemPrice" value="3000">
          </div>
        </form>
      </div>
  </div>
</div>
<!----------------------- Main Container End  --------------------------->



<div class="container-fluid text-center">
    <a href="#" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>
    </div>
     


<!----------------------- Footer Container Start  --------------------------->
    
    <footer class="container-fluid text-center">
  <div class="container-fluid">
  <h3>HELP</h3>
       <p><a href="#">About Us</a></p>
       <p><a href="#">Contact Us</a></p>
      <p><a href="#">Privacy Policies</a></p>
       <p><a href="#">How Do I Check Out?</a></p>     
</div>
</footer>

<!----------------------- Footer Container End  --------------------------->

</body>
</html>

