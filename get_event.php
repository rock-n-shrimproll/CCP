<?php
  session_start();
  require_once "vendor/connect.php";

  $event_num = $connect -> query("SELECT COUNT(*) FROM `event`");
  $event_count = $event_num -> fetch_assoc();
  $_SESSION['event_count'] = $event_count['COUNT(*)'];


  for ($i=1; $i <= $_SESSION['event_count']; $i++) {

  $get_event = $connect -> query("SELECT * FROM `event` WHERE `event_id` = '$i'");

  $event = $get_event -> fetch_assoc();

  if (count($event) === 0) {
    $_SESSION['message'] = 'Увы, никаких мероприятий не запланировано';
    header('Location: index.php');
  }
  else {
    $_SESSION['event'.$i] = array (
      "id" => $event['event_id'],
      "title" => $event['title'],
      "date_time" => $event['date_time'],
      "type_1" => $event['type_1'],
      "type_2" => $event['type_2'],
      "type_3" => $event['type_3'],
    );
  }
  // print_r($_SESSION['event'.$i]['type_'.$i]);
}


 ?>
