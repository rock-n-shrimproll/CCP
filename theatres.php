<?php
  session_start();
  $_SESSION['page'] = 'theatres';
  require 'get_theatres.php';
 ?>


<!DOCTYPE html>
<html lang="ru, en">
  <head>
    <meta charset="utf-8">
    <meta charset=utf-8>
    <link rel='stylesheet' type='text/css' href='css/index.css'>
    <link rel="stylesheet" href="css/card.css">
    <title>Театры</title>
  </head>
  <body>
    <?php require "blocks/sidenav.php" ?>
    <?php require 'blocks/header.php'; ?>

    <div class="auth_main">
      <div class="user_main">

        <?php for ($i= 1; $i <= $_SESSION['place_count']; $i++): ?>
          <?php if (isset($_SESSION['site'.$i])): ?>
            <div class="card">
              <div class="card-header">
                <h6 style="padding: 5 px">
                  <?php
                  echo ($_SESSION['site'.$i]['title']);
                   ?>
                </h6>
              </div>
              <div class="card-body">
                <ul style="padding-left: 0; list-style: none;">
                  <li>
                    <label>г.
                      <?php echo ($_SESSION['site'.$i]['city'])?>
                    </label>
                  </li>
                  <li>
                    <label>
                      <?php echo ($_SESSION['site'.$i]['street'])?>
                    </label>
                  </li>
                  <li>
                    <label>д.
                      <?php echo ($_SESSION['site'.$i]['house'])?>
                    </label>
                  </li>
                  <?php if (isset($_SESSION['site'.$i]['block'])): ?>
                    <li>
                      <label>строение
                        <?php echo ($_SESSION['site'.$i]['block'])?>
                      </label>
                    </li>
                  <?php endif; ?>

                </ul>
              </div>
            </div>
          <?php endif; ?>

      <?php endfor; ?>
      </div>


      <!-- <img src="img/images.jpeg" > -->
    </div>

    <?php require 'blocks/footer.php'; ?>


  </body>
</html>
