<?php
  session_start();
  $_SESSION['page'] = 'theatres';
 ?>


<!DOCTYPE html>
<html lang="ru, en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset=utf-8>
    <link rel='stylesheet' type='text/css' href='css/index.css'>
    <title>Театры</title>
  </head>
  <body>
    <?php require "blocks/sidenav.php" ?>

    <div class="index_main">
      <h3>Адреса театров</h3>
      <img src="img/images.jpeg" alt="">
    </div>
  </body>
</html>
