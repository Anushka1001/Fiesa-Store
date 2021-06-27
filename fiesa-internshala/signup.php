<?php
require "include/common.php";
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fiesa</title>
    <link rel="icon" href="img/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
<!--scripting-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body>
    <?php
    include 'include/header.php';
    ?>
    <div class="container" style="padding-top: 10vw;padding-bottom: 10vw;">
    <div class="row">
        <div class="col-lg-11 form">
            <h2>SIGN UP</h2>
            <form method="post" action="signup_script.php">
                <div class="form-group">
                    <input class="form-control" placeholder="Name" name="name"  required = "true">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required = "true" >
                    <?php
                    if(isset($_GET["m1"])){
                    echo $_GET['m1'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{5,}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true" maxlength="10" size="10">
                    <?php
                    if(isset($_GET["m2"])){
                      echo $_GET['m2'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <input class="form-control"  placeholder="City" name="city" required = "true">
                </div>
                <div class="form-group">
                    <input class="form-control"  placeholder="Address" name="address" required = "true">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <div class="col-sm-10">
                  Already have an account ?<a href="login.php" style="color:blue;"> Login</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    <?php
        include 'include/footer.php';
        ?>
    </body>
</html>