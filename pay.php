<?php
  session_start();
  require_once 'vendor/connect.php';

  $choosen_event = $_SESSION['choosen_event'];
  $sum = $_SESSION['sum'];
  // echo $sum;

  $cur_purchase = $_SESSION['purchase']['id'];
  $cur_client = $_SESSION['client']['id'];

  for ($i=0; $i < 25; $i++) {
    // echo $_SESSION['choosen_seats'][$i];
    if (isset($_SESSION['choosen_seats'][$i])){
      $choosen_seat = $_SESSION['choosen_seats'][$i]; //seat.seat


      $sql_p = "UPDATE `purchase` SET `sum`='$sum',`payment`=1, `status` = 0, `client_id`='$cur_client' WHERE `purchase_id` = '$cur_purchase'";
      $sql_p_u = $connect -> query($sql_p);


      }
    }

    header('Location: user.php')
?>
