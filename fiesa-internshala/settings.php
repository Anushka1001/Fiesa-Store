<?php
require("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
    <br>
    <div class="container">
    <div class="row">
        <div class="col-lg-11 form">
            <h2>Settings</h2>
            <h4>Change your password:</h4>
            <form action="settings_script.php" method="POST">
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Old Password" pattern=".{5,}" name="old_pass" required = "true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="New Password" pattern=".{5,}" name="new_pass" required = "true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Re-Type Password" pattern=".{5,}" name="rep_pass" required = "true">
                </div>
                <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                <button type="submit" name="change" class="btn btn-primary">Change</button>
            </form>
        </div>
    </div>
    </div>
    <?php include 'include/footer.php'; ?>
</body>
</html>