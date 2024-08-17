<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) 
{
   header('location: bootstrap.php');
}
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
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"></head>
<body>
   
    <?php
    include 'includes/header.php';
      $user_id = $_SESSION["user_id"];
      $query = "SELECT product_id FROM users_products WHERE user_id = '$user_id'";
      $result = mysqli_query($con, $query) or die(mysqli_error($con));

      while($row = mysqli_fetch_array($result)){
             $product_id = $row["product_id"];
             $query_update = "UPDATE users_products SET status = 'Confirmed' WHERE product_id = '$product_id'";            
             $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
         }
    ?>
<br>
<br>
<br>
<br>
    
    <div class="container">
      <div class="jumbotron">
        <center>
         <h3>Your order is confirmed. Thank you for shopping with us.</h3>
         <h4>Click<a href="products.html"> here</a> to purchase any other item.</h4>
        </center>    
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
   <?php
}
else
{
 header('location: index.php');
}
?>
