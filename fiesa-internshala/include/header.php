<div class="header">
  <div class="container-fluid">
    <div class="row align-items-right">
      <div class="col-lg-12 d-none d-lg-block">
        <p style="margin-bottom: 0px;">Fill up your bags! Sale ending Midnight.</p>
      </div>
    </div>
  </div>
</div>
<div class="navbar navbar-expand-lg bg-light sticky-top">
    <a href="index.php" class="navbar-brand"><img src="img/name.png"></a>
    <button type="button" class="navbar-toggler navbar-light" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
           <?php
            if (isset($_SESSION['email'])) {
            ?>
          <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i>  Cart</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="about.php"><i class="fa fa-users"></i>  About us</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="settings.php"><i class="fa fa-gear"></i>  Settings</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="logout_script.php"><i class="fa fa-sign-out"></i>  Logout</a>
          </li>
          <?php } 
          else { 
          ?>
          <li class="nav-item">
              <a class="nav-link" href="signup.php"><i class="fa fa-user"></i>   Signup</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="login.php"><i class="fa fa-sign-in">   Login</i></a>
          </li>
          <?php }
          ?>
      </ul>
    </div>
</div>
<br>