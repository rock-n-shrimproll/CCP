<?php
  session_start();
  $_SESSION['page'] = 'events';
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
        <?php for ($i=0; $i < 5; $i++):?>
        <div class="card">
          <div class="card-header">
            <h6>Header</h6>
          </div>
          <div class="card-body">
            <ul style="padding-left: 0; list-style: none;">
              <li>
                <label>Разннннннз</label>
              </li>
              <li>2</li>
              <li>3</li>
            </ul>
          </div>
          <a href="buy.php">
            <button type="submit" class="card-button">Выбрать место</button>
          </a>
        </div>
      <?php endfor; ?>


      </div>

    </div>

  </body>
</html>
