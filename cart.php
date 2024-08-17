<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
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
       <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <style>
        td{
          text-align: center;
          height: 45px;
        } 

        </style>
</head>
<body>
    <?php
    include './includes/header.php';
      ?>

 <br>
 <br>
 <br>
 <br>
 <br>

     
<table class="table table-striped table-responsive">
        <?php
        
        $sum = 0;
        $result = 0;
        
        if(isset($_GET['user_id'])){
             $user_id = $_SESSION['user_id'] ;
        }
        $query = "SELECT items.price AS Price, items.product_id, items.name AS Name FROM users_items INNER JOIN items ON users_items.product_id = items.item_id WHERE users_items.user_id='$user_id' and status='Added To Cart'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        if (mysqli_num_rows($result) >= 1) {
            ?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];                                    
                    $id = $row["product_id"];
                    echo "<tr><td>" . "#" . $row["product_id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
               
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
    </table>
  <?php
    include 'includes/footer.php';
    ?>

</body>
</html>

