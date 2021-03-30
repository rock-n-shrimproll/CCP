<?php
  session_start();
  require_once 'vendor/connect.php';

  $cur_client = $_SESSION['client']['id'];
  $choosen_event = $_SESSION['choosen_event'];
  $cur_purchase = $_SESSION['purchase']['id'];
  for ($i=0; $i < 25; $i++) {
    if (isset($_SESSION['choosen_seats'][$i])){
      $choosen_seat = $_SESSION['choosen_seats'][$i];

      $sql_taken = "UPDATE `purchase` set `status` = 1 where `purchase_id` = '$cur_purchase'";
      if (!mysqli_query($connect, $sql_taken)) {
        printf("Сообщение ошибки: %s\n", mysqli_error($connect));
      }

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

        $sql_s = "UPDATE `seat` SET `status_purchase`= '$cur_purchase' WHERE `seat` = '$choosen_seat' AND `event_id` = '$choosen_event'";
        $sql_s_u = $connect -> query($sql_s);
      }
    }




  // for ($i=0; $i < count($_SESSION['choosen_seats']); $i++) {
  //
  // }
 ?>
