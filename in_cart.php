<?php
  session_start();
  require_once 'vendor/connect.php';

  $cur_client = $_SESSION['client']['id'];
  $choosen_event = $_SESSION['choosen_event'];
  for ($i=0; $i < 25; $i++) {
    if (isset($_SESSION['choosen_seats'][$i])){
      $choosen_seat = $_SESSION['choosen_seats'][$i];

      $sql = "SELECT  `seat`, `price` FROM `seat` WHERE `event_id` = '$choosen_event' AND `seat` = '$choosen_seat'";

      $sql_select = $connect -> query($sql);
      $ticket_num = $sql_select -> num_rows;


      for ($j=0; $j < $ticket_num; $j++) {
        $choosen_ticket = $sql_select -> fetch_assoc();
        $_SESSION['choosen_ticket'.$i] = array (
                "seat" => $choosen_ticket['seat'],
                "price" => $choosen_ticket['price'],
              );
        }

        // $sql = "UPDATE `purchase`, `seat` SET `status` = 0, `payment` = 1 WHERE `seat_id`='$choosen_seat'";

      }
    }




  // for ($i=0; $i < count($_SESSION['choosen_seats']); $i++) {
  //
  // }
 ?>
