<?php
require "include/common.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Fiesa</title>
        <link rel="icon" href="img/logo.png">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
        <div class="container-fluid">
          <div class="row c">
            <div class="col-lg-5 col-md-5">
              <div class="text">Glow you deserve</div>
              <h4 style="color: #555555;font-family:Goudy Old Style;">Fiesa Store bringing you a wide range of organic scented beauty products that nourish and replenish your skin and make you glow. Today's demand is of increasing healthy beauty. We are ready to help you. Dive into our luxury beauty and daily care supplies to get yours.</h4><br><br>
              <center><h1 style="font-family: Goudy old style;color: #B26167">Mid year sale!<br>UPTO 50% OFF!</h1><br>
              <div class="btn btn-light"><a href="products.php"><p style="color:#ffffff;">Shop Now</p></a></div></center><br><br>
            </div>
            <div class="col-lg-7 col-md-7">
              <div id="carouselExampleIndicators" class="carousel slide ml-auto" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/s2.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/s1.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/s3.png" alt="Third slide">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="jumbotron">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><a href="products.php#eyes" id="eyes"><img src="img/eye.png"></a></div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><a href="products.php#skin" id="skin"><img src="img/skin.png"></a></div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><a href="products.php#lips" id="lips"><img src="img/lips.png"></a></div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><a href="products.php#face" id="face"><img src="img/face.png"></a></div>
            </div>
          </div>
        </div>
        <hr style="border-color: #c99094;">
        <hr style="border-color: #B26167;">
        <hr>
        <div class="container-fluid">
          <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/sale1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/sale3.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/sale4.png" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/sale2.png" alt="Third slide">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <hr>
        <hr style="border-color: #B26167;">
        <hr style="border-color: #c99094;">
        <div class="container">
          <div class="row c">
            <div class="col-lg-12 col-md-12">
              <div class="card-columns">
                <div class="card">
                  <img class="card-img-top" src="img/s3.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Our new range of hair care products</h5>
                    <p class="card-text">Our new range of hair care products is launching soon. stay tuned to get the best deals out of it. Nourished, strong, shiny silky hair soon in your lifestyle.</p>
                  </div>
                </div>
                <div class="card p-3">
                  <blockquote class="blockquote mb-0 card-body">
                    <p>Taking joy in living is a woman's best cosmetic.</p>
                    <footer class="blockquote-footer">
                      <small class="text-muted">Rosalind Russell
                      </small>
                    </footer>
                  </blockquote>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/s1.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Let's talk</h5>
                    <p class="card-text">Ask The experts and get your solutions in a minute. Join now!</p>
                  </div>
                </div>
                <div class="card text-white text-center p-3 d">
                  <blockquote class="blockquote mb-0"><p>Beauty itself is but the sensible image of the Infinite.</p>
                    <footer class="blockquote-footer">
                      <small>
                        Francis Bacon
                      </small>
                    </footer>
                  </blockquote>
                </div>
                <div class="card text-center">
                  <div class="card-body">
                    <h5 class="card-title">WILD SALE!</h5>
                    <p class="card-text" style="color: #B26167;">UPTO 50% OFF ON SELECTED GOODS.<br>BUY NOW!</p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img" src="img/eyes.png" alt="Card image">
                </div>
                <div class="card p-3 text-right">
                  <blockquote class="blockquote mb-0">
                    <p>Think of all the beauty still left around you and be happy.</p>
                    <footer class="blockquote-footer">
                      <small class="text-muted">
                        Anne Frank
                      </small>
                    </footer>
                  </blockquote>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Creator Column</h5>
                    <p class="card-text">Beauty should be natural not caked. With all organic and beautiful Products we aim to bring you your inner beauty.<br></p>
                    <footer class="blockquote-footer">
                      <small class="text-muted">
                        Anushka Bajpai <cite title="Source Title"> Creator</cite>
                      </small>
                    </footer>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer f2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <center><img src="img/name.png" style="max-height: 100px;max-width: 200px;">
        <h4 style="color: #ffffff;font-family:Goudy Old Style;">
          Beauty you deserve!
        </h4></center>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h4 style="color: #B26167;font-family:Goudy Old Style;">
          Contact Us:
        </h4><h1 style="font-size: 60px;">
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-instagram"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a></h1>
      </div>
    </div>
  </div>
</div>
        <hr style="border-color: #c99094;">
        <hr style="border-color: #B26167;">
        <hr><br>
        <?php
        include ("include/footer.php");
        ?>
    </body>
</html>