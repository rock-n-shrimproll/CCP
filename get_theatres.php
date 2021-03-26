<?php
  session_start();
  require_once "vendor/connect.php";

  $place_num = $connect -> query("SELECT MAX(`site_id`) FROM `site`");

  $place_count = $place_num -> fetch_assoc();

  $_SESSION['place_count'] = $place_count['MAX(`site_id`)'];
  //echo ($_SESSION['place_count']);


  // $id3 = $connect -> query("SELECT * FROM `site` WHERE `site_id` = 3");
  // $id3 = $id3 -> fetch_assoc();
  // print_r(var_dump($id3));


  for ($i=1; $i <= $_SESSION['place_count']; $i++) {

    $get_site = $connect -> query("SELECT * FROM `site` WHERE `site_id` = '$i'");
    $site = $get_site -> fetch_assoc();
    if (isset($site)) {
      $_SESSION['site'.$i] = array (
            "id" => $site['site_id'],
            "title" => $site['title'],
            "city" => $site['city'],
            "street" => $site['street'],
            "house" => $site['house'],
            "block" => $site['block'],
          );
      //print_r($_SESSION['site'.$i]['id']);
    }
  }
 ?>
