<?php
  session_start();
//  print_r($_COOKIE);
  unset($_SESSION);
  $name = 'client';
  $id =  $_SESSION['client']['id'];
  setcookie($name, $id, time() + $lifetime, '/');
  echo '<script>
  const offset = -60 * (new Date()).getTimezoneOffset();
  document.cookie = "client='.$id.'; path=/;
  expires= 1"
  </script>';

  // echo (document.cookie);

  header('Location: ../index.php');
 ?>
