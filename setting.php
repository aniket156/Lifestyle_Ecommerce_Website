<?php
require 'includes/common.php';
if (!isset($_SESSION['email']))
{
   header('location : bootstrap.php');
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
<br>
          <div class="container">
              <div class="col-xs-offset-2 col-xs-6">
                <h3>Change Password</h3>
                <form action="setting_script.php" method="POST">
                  <input type="text" name="oldPassword" placeholder="Old Password" class="form-control" required="true"><br>
                  <input type="text" name="newPassword" placeholder="New Password" class="form-control" required="true"><br>
                  <input type="text" name="newPasswordRe" placeholder="Re-Type New Password" class="form-control" required="true"><br>
                  <input type="submit" class="btn btn-setting btn-block" value="Confirm">
                </form>
              </div>
            </div>
          </div>


 <?php
    include 'includes/footer.php';
    ?>

   

</body>
</html>

