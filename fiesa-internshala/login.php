<?php
require("include/common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fiesa</title>
    <link rel="icon" href="img/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
<!--scripting-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <?php include 'include/header.php'; ?>
    <?php 
        if (isset($_SESSION['email'])) {
            header('location: products.php'); 
        } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-lg-offset-11" style="padding-top: 10vw;padding-bottom: 5vw;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">LOGIN</h4>
                        </div>
                        <p class="text-warning">Login to make a purchase</p>
                        <div class="panel-body">
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" >
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{5,}">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="signup.php" style="color: blue">Register</a></p></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body></html>