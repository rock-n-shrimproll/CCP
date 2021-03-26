<?php
  session_start();
  $_SESSION['page'] = 'events';
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
      <?php // TODO: выбор ?>
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
                  echo ($_SESSION['event'.$i]['date_time']);
                   ?>
                </label>
              </li>
              <li>
                <label>
                  <?php
                  // TODO: место проведения
                   ?>
                </label>
              </li>
              <!-- <?php
              // for ($j=1; $j <= 3; $j++):
              ?> -->
                <!-- <li>
                  <label>
                    <?php
                    // echo ($_SESSION['event'.$i]['type_'.$j]);
                    ?>
                  </label>
                </li> -->
                <!-- <?php
                // if isset($_SESSION['event'.$i]['type_'.$j]):
                ?>
                <li>
                  <label>
                    <?php
                    // echo ($_SESSION['event'.$i]['type_'.$i]);
                     ?>
                  </label>
                </li>
              <?php
            // endif; ?> -->
              <!-- <?php
            // endfor; ?> -->

            </ul>
          </div>
          <a href="buy.php">
            <button type="submit" class="card-button">
              <?php $_SESSION['choosen_event'] = $_SESSION['event'.$i]['id'] ?>
              Выбрать место</button>
          </a>
        </div>
      <?php endfor; ?>


      </div>

    </div>

  </body>
</html>
