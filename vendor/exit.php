<?php
  session_start();
  require_once 'connect.php';
  //print_r($_COOKIE);

//print_r($_SESSION);

  $name = 'client';
  $id =  $_SESSION['client']['id'];
  setcookie($name, $id, time() + $lifetime, '/');
  echo '<script>
  const offset = -60 * (new Date()).getTimezoneOffset();
  document.cookie = "client='.$id.'; path=/;
  expires= 1"
  </script>';
  //print_r($_SESSION);

  unset($_SESSION['client']);
  unset($_SESSION['choosen_event']);
  unset($_SESSION['message']);
  unset($_SESSION['last_purchase_num']);

  if ($_SESSION['purchase']['sum'] === '0') {
    $drop_pur = "DELETE FROM `purchase` WHERE `sum` = 0";
    $drop = $connect -> query($drop_pur);
  }
  unset($_SESSION['purchase']);
  print_r($_SESSION);

  header('Location: ../index.php');
 ?>
