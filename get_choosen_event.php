<?php
  session_start();
  require 'vendor/connect.php';

  $choosen_event = $_SESSION['choosen_event'];

  $sql = "SELECT event.title, event.date_time, event_has_site.site_id
  FROM `event`, `event_has_site`
  WHERE event.event_id = '$choosen_event' AND event_has_site.event_id = '$choosen_event'";

  $sql_select = $connect -> query($sql);

  $choosen_event_info = $sql_select -> fetch_assoc();

  $_SESSION['choosen_event_info'] = array (
        "title" => $choosen_event_info['title'],
        "date_time" => $choosen_event_info['date_time'],
      );

  $choosen_site = $choosen_event_info['site_id'];

  $sql_site = "SELECT `title` FROM `site` WHERE `site_id` = '$choosen_site'";

  $sql_select_site = $connect -> query($sql_site);
  $choosen_event_info_site = $sql_select_site -> fetch_assoc();

  $_SESSION['choosen_event_info']['site'] = $choosen_event_info_site['title'];

  //print_r($_SESSION['choosen_event_info']);


 ?>
