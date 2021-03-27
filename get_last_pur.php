<?php
  session_start();
  require_once 'vendor/connect.php';

  $cur_client = $_SESSION['client']['id'];

  //echo ($cur_client);


  $que = "SELECT event.title, event.date_time, seat.seat, purchase.sum FROM `event`, `seat`, `purchase`
WHERE (purchase.client_id = '$cur_client') AND (purchase.status = 0)
AND (seat.status_purchase = purchase.purchase_id) AND (event.event_id = seat.event_id);";

$sql = "SELECT SUM(purchase.sum) FROM `purchase` WHERE (purchase.client_id = '$cur_client') AND (purchase.status = 0)";

  $last_pur = $connect -> query($que);
  $sum_sql = $connect -> query($sql);
  $summa = $sum_sql -> fetch_assoc();
  $_SESSION['client']['summa'] = $summa['SUM(purchase.sum)'];

  $_SESSION['last_purchase_num'] = mysqli_num_rows($last_pur);
  // echo ($_SESSION['last_purchase_num']);

  if (isset($cur_client)) {
    for ($i=1; $i <= $_SESSION['last_purchase_num'] ; $i++) {
      $last_pur_i = $last_pur -> fetch_assoc();

      $_SESSION['last_purchase'.$i] =  array(
        "title" => $last_pur_i['title'],
        "date_time" => $last_pur_i['date_time'],
        "seat" => $last_pur_i['seat'],
        "sum" => $last_pur_i['sum'],
      );
      // print_r($_SESSION['last_purchase'.$i]);
    }

    //print_r(var_dump($last_pur));
  }
  else {
    $_SESSION['last_purchase_num'] = NULL;
  }

  // $pur = mysqli_fetch_assoc($last_pur);
  // print_r(var_dump($pur));


 ?>
