<?php
  session_start();
  require 'vendor/connect.php';
  //
  $choosen_event = $_SESSION['choosen_event'];
  //
  // $sql = "SELECT seat_id, seat, price FROM seat WHERE status_purchase is null AND event_id = '$choosen_event'";
  //
  // $sql_select = $connect -> query($sql);
  //
  // $free_spots_num = $sql_select -> num_rows;

  $_SESSION['taken_spots'] = array();
  // echo "string";

  // for ($i=1; $i<= $free_spots_num ; $i++) {
  //   $spot = $sql_select -> fetch_assoc();
  //   $_SESSION['free_spot_info'.$i] = array (
  //         "id" => $spot['seat_id'],
  //         "num" => $spot['seat'],
  //         "price" => $spot['price'],
  //       );
  //   // array_push($_SESSION['free_spots'], $_SESSION['free_spot_info'.$i]['num']);
  // }

  $sql_lock = "LOCK TABLES `seat` READ";
  mysqli_query($connect, $sql_lock);
  if (!mysqli_query($connect, $sql_lock)) {
    printf("Сообщение ошибки: %s\n", mysqli_error($connect));
  }
  
  $sql_t = "SELECT `seat` FROM `seat`	 WHERE `status_purchase` is not null AND event_id = '$choosen_event'";
  $sql_select = $connect -> query($sql_t);
  $taken_spots_num = $sql_select -> num_rows;

  for ($i=1; $i <= $taken_spots_num; $i++) {
    $spot_t = $sql_select -> fetch_assoc();
    $_SESSION['taken_spot_info'.$i] =  array("seat" => $spot_t['seat'],);
    array_push($_SESSION['taken_spots'], $_SESSION['taken_spot_info'.$i]['seat']);
  }

  <?php  $sql_unlock = "UNLOCK TABLES";
  mysqli_query($connect, $sql_unlock);
  ?>

  //print_r($_SESSION['taken_spots']);
 ?>
