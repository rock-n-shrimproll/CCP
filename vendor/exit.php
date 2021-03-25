<?php
  session_start();
  print_r($_COOKIE);
  unset($_SESSION['client']);
  unset($_COOKIE[session_name()]);
  setcookie(session_name(), session_id(), -1, '/');

  header('Location: ../index.php');
 ?>
