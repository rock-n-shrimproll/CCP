<?php
  session_start();
  $_SESSION['page'] = 'index';
 ?>


<!DOCTYPE html>
<html lang="ru, en">
<head>
  <meta charset="utf-8">
  <link rel='stylesheet' href='css/index.css'>
  <title>Основная страница</title>
</head>
<body>

  <?php require "blocks/header.php" ?>

  <?php // TODO: добавить логику в header -- смена h1 и набора кнопок ?>

  <?php require "blocks/sidenav.php" ?>


  <div class="index_main">
    <p>
      Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum,
      altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum.
      Affert laboramus repudiandae nec et. Inciderint efficiantur his ad.
      Eum no molestiae voluptatibus.</p>
    <img src="img/images.jpeg" alt="cinema" width = 100%>
  </div>

</body>
</html>
