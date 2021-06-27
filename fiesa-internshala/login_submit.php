<?php

require("include/common.php");

$email = $_POST['email'];
$email = mysqli_real_escape_string($c, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($c, $password);
$password = md5($password);

$query = "SELECT id,email FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($c, $query)or die($mysqli_error($c));
$num = mysqli_num_rows($result);

if ($num == 0) {
  $error = $_GET['error'];
  $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
  header('location: login.php');
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');
}
?>
