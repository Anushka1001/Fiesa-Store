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
        include 'include/check-if-added.php';
        ?>
        <div class="container-fluid products_jumbotron">
      <br><br>
      <div id="eyes" name="eyes"><div class="text">EYE PRODUCTS</div></div>
    </div><br><br>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Beauty Bakerie Cotton Candy Champagne Blush Palette</h5>
                  <p class="card-text">Price Rs. 2999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                            <?php
                        } else {
                        if (check_if_added_to_cart(1)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">ILIA Essential Face Palette Warm</h5>
                  <p class="card-text">Price Rs. 3299.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(2)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Celestial Sphere Eye Soot in Pyxis</h5>
                  <p class="card-text">Price Rs. 2,842.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(3)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Eye Colour Cream in Sienna Stardust</h5>
                  <p class="card-text">Price Rs. 1800.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(4)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">RMS Beauty Eye Polish</h5>
                  <p class="card-text">Price Rs. 2199.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(5)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Dramatic Volume Mascara</h5>
                  <p class="card-text">Price Rs. 1699.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(6)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Alima Pure Pressed Eyeshadow</h5>
                  <p class="card-text">Price Rs. 1999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(7)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Alima Pure Natural Definition Eye Pencil</h5>
                  <p class="card-text">Price Rs. 1399.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(8)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid products_jumbotron">
          <br><br>
          <div id="skin" name="skin"><div class="text">SKIN PRODUCTS</div></div>
        </div><br><br>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Ocean Cleansing Milk</h5>
                  <p class="card-text">Price Rs. 4699.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(9)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/10.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Renew Pure Radiance Oil</h5>
                  <p class="card-text">Price Rs. 6299.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(10)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/11.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Green Apple Age Defy Moisturizer</h5>
                  <p class="card-text">Price Rs. 4599.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(11)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/12.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Pink Clay Soap Bar</h5>
                  <p class="card-text">Price Rs. 3799.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(12)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/14.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Liquid Green Renewing Oil</h5>
                  <p class="card-text">Price Rs. 8599.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(13)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/13.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Skin Savior: Multi-Tasking Wonder Balm</h5>
                  <p class="card-text">Price Rs. 6899.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(14)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/15.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Ultra Calming Routine</h5>
                  <p class="card-text">Price Rs. 3399.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(15)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/16.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Indie Lee CoQ-10 Toner</h5>
                  <p class="card-text">Price Rs. 2499.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(16)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-default">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
           
        <div class="container-fluid products_jumbotron">
          <br><br>
          <div id="lips" name="lips"><div class="text">LIP PRODUCTS</div></div>
        </div><br><br>
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Unique Gadget</h5>
                  <p class="card-text">Price Rs. 39999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(117)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=117" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Handcrafted</h5>
                  <p class="card-text">Price Rs. 39999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(118)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=118" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Harris & co.</h5>
                  <p class="card-text">Price Rs. 29999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(119)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=119" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">RANDOM smart</h5>
                  <p class="card-text">Price Rs. 79999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(120)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=120" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-5.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Smile 2u</h5>
                  <p class="card-text">Price Rs. 1999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(121)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=121" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-6.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Banggood DIY</h5>
                  <p class="card-text">Price Rs. 29999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(122)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=122" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-7.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">3D LED Milan</h5>
                  <p class="card-text">Price Rs. 7999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(123)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=123" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-8.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">United CASO</h5>
                  <p class="card-text">Price Rs. 13999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(124)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=124" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
           
        <div class="container-fluid products_jumbotron">
          <br><br>
          <div id="face" name="face"><div class="text">FACE PRODUCTS</div></div>
        </div><br><br>
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Unique Gadget</h5>
                  <p class="card-text">Price Rs. 39999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(117)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=117" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Handcrafted</h5>
                  <p class="card-text">Price Rs. 39999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(118)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=118" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Harris & co.</h5>
                  <p class="card-text">Price Rs. 29999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(119)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=119" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">RANDOM smart</h5>
                  <p class="card-text">Price Rs. 79999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(120)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=120" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-5.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Smile 2u</h5>
                  <p class="card-text">Price Rs. 1999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(121)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=121" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-6.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Banggood DIY</h5>
                  <p class="card-text">Price Rs. 29999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(122)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=122" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-7.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">3D LED Milan</h5>
                  <p class="card-text">Price Rs. 7999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(123)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=123" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="margin-bottom:20px;">
                <img src="img/c-8.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">United CASO</h5>
                  <p class="card-text">Price Rs. 13999.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href= "login.php"   role="button" class="btn btn-default btn-block">Buy Now</a></p>
                    <?php
                        } else {
                        if (check_if_added_to_cart(124)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                       } else {
                        ?>
                        <a href="cart-add.php?id=124" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <?php
        include ("include/footer.php");
        ?>
    </body>
</html>