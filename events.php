<?php
  session_start();
  $_SESSION['page'] = 'events';
  unset($_SESSION['choosen_event']);
  unset($_SESSION['choosen_event_info']);
  unset($_SESSION['taken_spots']);
  require_once 'get_event.php';
?>



<!DOCTYPE html>
<html lang="ru, en">
  <head>
    <meta charset=utf-8>
    <link rel='stylesheet' href='css/index.css'>
    <link rel="stylesheet" href="css/card.css">
    <title>События</title>
  </head>
  <body>
    <?php require 'blocks/sidenav.php'; ?>
    <?php require 'blocks/header.php'; ?>

    <div class="auth_main">
      <div class="user_main">
        <?php for ($i=1; $i <= $_SESSION['event_count']; $i++):?>
        <div class="card">
          <div class="card-header">
            <h6>
              <?php
              echo ($_SESSION['event'.$i]['title']);
              ?>
            </h6>
          </div>
          <div class="card-body">
            <ul style="padding-left: 0; list-style: none;">
              <li>
                <label>
                  <?php
                  echo ($_SESSION['event'.$i]['type']);
                   ?>
                </label>
              </li>
              <li>
                <label>
                  <?php
                  echo (date("H:i", strtotime($_SESSION['event'.$i]['date_time'])));
                   ?>
                </label>
              </li>
              <li>
                <label>
                  <?php
                  echo (date("d.m.Y", strtotime($_SESSION['event'.$i]['date_time'])));
                   ?>
                </label>
              </li>
             </ul>
          </div>
          <?php if (isset($_COOKIE['client'])): ?>
            <!-- <a href="buy.php"> -->
              <form class="buy.php" action="buy.php" method="post">
                <!-- <?php echo strval($i)?> -->
                <input type="submit" class="card-button" name="choosen_event" value="Выбрать <?php echo strval($i)?>">
                  <!-- <?php $_SESSION['choosen_event'] = $_SESSION['event'.$i]['id'] ?> -->
                  <!-- Выбрать место</button> -->
              </form>

            <!-- </a> -->
          <?php endif; ?>
        </div>
      <?php endfor; ?>


      </div>

    </div>

    <?php require 'blocks/footer.php'; ?>

  </body>
</html>
