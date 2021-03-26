<?php
  session_start();
  require 'vendor/connect.php';


  for ($i=1; $i <= $_SESSION['event_count']; $i++) {
    for ($j=1; $j <= 25; $j++) {
      $rand_num = rand(300, 5000);
      $event_i = intval($_SESSION['event'.$i]['id']);
      $set_seat = "INSERT INTO `seat` (`seat_id`, `seat`, `price`, `status_purchase`, `event_id`)
      VALUES (DEFAULT, '$j', '$rand_num', DEFAULT, '$event_i')";
      $set_seats = $connect -> query($set_seat);

      // TODO: добавить update 
    }
  }
 ?>
