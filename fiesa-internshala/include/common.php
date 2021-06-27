<?php
$c=mysqli_connect("localhost","root","","fiesa") 
or die(mysqli_error($c));
?>

<?php
if (session_status() === PHP_SESSION_NONE){session_start();}
if (isset($_SESSION['id'])) {
  echo "Hello ".$_SESSION[‘email’];
}
?>