<?php
  session_start();
  require 'vendor/connect.php';
  require_once 'get_event.php';
  echo "string";

  for ($i=1; $i<= $_SESSION['event_count']; $i++) {
    $event_i = $_SESSION['event'.$i]['id'];

    for ($j=1; $j <=$_SESSION['place_count'] ; $j++) {
      $site_j = $_SESSION['site'.$j]['id'];

      if (isset($_SESSION['site'.$j])) {
        $query_event_site = "SELECT * FROM `event_has_site`
        WHERE `event_id` = '$event_i' AND `site_id` = '$site_j'";
        $event_site = $connect -> query($query_event_site);

        $event_site_j = $event_site -> fetch_assoc();

        print_r($event_site_j);

        if (isset($event_site_j)){
          $connect_event_site = array(
            "event_id" => $event_site_j['event_id'],
            "site_id" => $event_site_j['site_id'],
          );

          //print_r(var_dump($connect_event_site['site_id']));
          //
          //print_r($connect_event_site[event_id].'-'.$connect_event_site['site_id']);

          //array_push($_SESSION['event'.$i], $connect_event_site['site_id']);
        }
      }
      // print_r($_SESSION['event'.$i]);
    }
  }
?>
