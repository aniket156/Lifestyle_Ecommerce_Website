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
    include 'includes/header.php';
    ?>

<br>
<br>
<br>
<br>
  
    <div class="container">
      <div class="rows">
        <div class="col-xs-offset-2 col-xs-6">
           <div class="panel panel-primary">
             <div class="panel-heading">
                 <h4>LOGIN</h4>
             </div>
             <div class="panel-body">
               <form method="POST" action="login_submit.php">
                <p>Login to make a purchase</p>
                <input type="text" name="email" placeholder="Email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Not Valid">
                <br>
                <input type="text" name="password" placeholder="Password" class="form-control" required="true">
                <br>
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Login</button>
                <br><br><br>
               </form>
             </div>
             <div class="panel-footer">
                <p>Don't have a account? <a href="signup.php">Register</a></p>
             </div>
           </div>
        </div>
      </div>
    </div>      

 <?php
    include 'includes/footer.php';
    ?>

 
</body>
</html>