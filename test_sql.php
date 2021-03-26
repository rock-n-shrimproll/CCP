<?php
  session_start();
  require_once "connect.php";

  "SELECT * FROM `client` WHERE `login`='$login' AND `password`='$password'"


  // echo (json_encode ($_SESSION['client']));
  $current_client = $_SESSION['client']['id'];
  $pur_client_id = $_SESSION['purchase']['client_id'];
  $pur_status = $_SESSION['purchase']['status'];

  echo "$current_client, $pur_status, $pur_client_id";
  $find_sum = $connect -> query("SELECT SUM(`purchase.sum`) FROM `purchase` WHERE '$pur_client_id' = '$current_client' AND '$pur_status' = 1");
  $sum = $find_sum -> fetch_assoc();
  // array_push($_SESSION['client'], $sum['COUNT(*)']);
  print_r($sum);
 ?>
