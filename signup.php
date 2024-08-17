<?php
require './includes/common.php';
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
</head>
<body>
      <?php
    include 'includes/header.php';
    ?>      

<br>
<br>
<br>
          <div class="container">
              <div class="col-xs-offset-2 col-xs-6">
                <h1>SIGN UP</h1>
                <form action="signup_submit.php" method="POST">
                  <input type="text" name="name" placeholder="Name" class="form-control"><br>
                  <input type="text" name="email" placeholder="Email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                  <input type="text" name="password" placeholder="Password" class="form-control" required="true" pattern=".{6,}"><br>
                  <input type="contact" name="contact" placeholder="Contact" class="form-control" required="true"><br>
                  <input type="text" name="city" placeholder="City" class="form-control" required="true"><br>
                  <input type="text" name="address" placeholder="Address" class="form-control" required="true"><br>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>


 <?php
    include 'includes/footer.php';
    ?>


</body>
</html>