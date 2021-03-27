<?php
session_start();
$_SESSION['page'] = 'buy';
$_SESSION['choosen_event'] = stristr($_POST['choosen_event'], ' ');
require_once 'get_choosen_event.php';
require 'get_spots.php';
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/seats.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Выбор билета</title>
</head>

<body>
  <?php require "blocks/sidenav.php" ?>
  <?php require 'blocks/header.php'; ?>

  <div class="auth_main">
    <div class="container">
      <label style="margin-left: 10px; font-size: 25px">Дата проведения: </label>
       <?php
       echo (date("d.m.Y", strtotime($_SESSION['choosen_event_info']['date_time'])));
        ?>
       <br>
      <label style="margin-left: 10px; font-size: 25px">Время проведения: </label>
       <?php
       echo (date("H:i", strtotime($_SESSION['choosen_event_info']['date_time'])));
        ?>
       <br>
       <label style="margin-left: 10px; font-size: 25px">Название: </label>
       <?php
       echo ($_SESSION['choosen_event_info']['title']);
        ?>
       <br>
       <label style="margin-left: 10px; font-size: 25px">Место проведения: </label>
       <?php
       echo ($_SESSION['choosen_event_info']['site']);
        ?>

    </div>
    <div class="buy-main">
      <h3><b>Выбор места</b></h3>
        <form action="cart.php" class="seat" method="post">
          <?php
          for ($i = 1; $i <= 25; ++$i) {
            $mod = 1;
            for ($j=0; $j < count(array_values($_SESSION['taken_spots'])); $j++) {
              if ($i == array_values($_SESSION['taken_spots'])[$j])
              $mod = 0;
            }
              $disabled = 'disabled="true"';
              if ($mod == 1) {
                $disabled = '';
                }
            echo
            '<label class="seat-select" for="seat-' .$i. '">
            <input ' . $disabled . '" id="seat-' .$i. '" name="' . strval($i) . '" type="checkbox" ></input>
            <span>' . strval($i) . '</span>
            </label>';
            // echo (var_dump(array_values($_SESSION['taken_spots'])[$i]));

          } ?>
          <a href= "cart.php">
            <button type="submit" class="signupbtn">В корзину</button>
          </a>
        </form>

    </div>

    <?php require 'blocks/footer.php'; ?>


  </div>
</body>

</html>
