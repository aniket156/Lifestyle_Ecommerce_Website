<?php
require 'includes/common.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOTSTRAP</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

    <?php
    include './includes/header.php';
    include './includes/check-if-added.php';
    ?>
<br>
<br>
<br>
<br>
    
    <div class="container">
      <div class="jumbotron">
        <center>
         <h1>“Welcome to our Lifestyle Store!”</h1>
         <p>“We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.”</p>
        </center>    
      </div>
    </div>
    
    <div class="container">
      <div class="rows">
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/1.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>Cannon EOS</h3>
              <p>Price Rs. 36000</p>
              <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } }
                   ?>
              
            </center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/2.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>Sony DSLR</h3>
              <p>Price Rs. 50000</p>
               <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } }
                   ?>
              
                </center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/3.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>Sony DSLR</h3>
              <p>Price Rs. 50000</p>
               <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } }
                   ?>
                          </center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/4.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>Olympics DSLR</h3>
              <p>Price Rs. 80000</p>
              <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } }
                   ?>
              
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>

     <div class="container">
      <div class="rows">
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/9.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>Titan Model #301</h3>
              <p>Price Rs. 13000.00</p>
              <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } }
                   ?>
              
            </center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/10.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>Titan Model #201</h3>
              <p>Price Rs. 3000.00</p>
             <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } }
                   ?>
                          </center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/11.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>HMT Milan</h3>
              <p>Price Rs. 8000.00</p>
             <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as 
                  if(check_if_added_to_cart != 0) echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
            </center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/12.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>Faber Luba #111</h3>
              <p>Price Rs. 18000.00</p>
              <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } }
                   ?>
              
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="rows">
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/8.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>H&W</h3>
              <p>Price Rs. 800.00</p>
             <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
            </center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/6.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>Luis Phil</h3>
              <p>Price Rs. 1000.00</p>
              <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as 
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
            </center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/13.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>John Zok</h3>
              <p>Price Rs. 1500.00</p>
               <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
            </center>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="img/14.jpg " style="height: 165px;">
            <div class="caption">
              <center>
              <h3>Jhalsani</h3>
              <p>Price Rs. 1300.00</p>
             <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not. 
                if (check_if_added_to_cart(1)) { //This is same as 
                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>

 <?php
    include 'includes/footer.php';
    ?>

</body>
</html>