<?php
  session_start();
  require 'vendor/connect.php';
  $client = $_SESSION['client']['id'];

  //echo "$client";

  $que = "SELECT SUM(purchase.sum) FROM `purchase`
  WHERE purchase.client_id= '$client'";

  $purchase_sum = $connect -> query($que);
  $purchase_summa =  mysqli_fetch_assoc($purchase_sum);

  // print_r(json_decode($purchase_summa));
  // $_SESSION['client']['summa'] = $purchase_sum;

  if (isset($purchase_summa)) {
    $_SESSION['client']['summa'] = $purchase_summa['SUM(`purchase.sum`)'];
    // print_r($_SESSION['client']['summa']);
  }
  else {
    $_SESSION['summa'] = 0;
  }


 ?>
