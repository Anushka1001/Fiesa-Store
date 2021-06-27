<?php

require("include/common.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($c, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($c, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($c, $password);
  $password = MD5($password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($c, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($c, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($c, $address);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; 
  $regex_num = "/^[789][0-9]{9}$/";

  $select_query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($c, $select_query)or die($mysqli_error($c));
  $num = mysqli_num_rows($result);

  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  }else {

    $query = "INSERT INTO users(name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address')";
    mysqli_query($c, $query) or die(mysqli_error($c));
    $user_id = mysqli_insert_id($c);
    $_SESSION['email'] = $email;
    $_SESSION['users_id'] = $user_id;
    header('location: products.php');
  }
?>
