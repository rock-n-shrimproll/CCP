<?php
  session_start();
  $_SESSION['page'] = 'manager';
 ?>

<!DOCTYPE html>
<html lang="en, ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' href='css/index.css'>
    <link rel="stylesheet" href="css/card.css">
    <title>Страница менеджера</title>
  </head>
  <body>
    <?php require "blocks/sidenav.php" ?>
    <?php require "blocks/header.php" ?>
    <div class="auth_main">
    <h3>Здравствуйте, <?php echo($_SESSION['manager']['id']); ?>
    <h3>Запросы на возврат</h3>
      <div class="user_main">
        <?php // TODO: переделать нумерацию ?>
        <?php for ($i=0; $i < 7; $i++): ?>
        <div class="card">
          <div class="card-header">
            <h6>Название мероприятия</h6>
          </div>
          <div class="card-body">
            <ul style="padding-left: 0; list-style: none;">
              <?php // TODO: <li> in count(массив, выкромсаного из бд) далее использовать элементы этого массива  ?>
              <li>
                <label>Время мероприятия</label>
              </li>
              <li>
                <label>Дата мероприятия</label>
              </li>
              <li>
                <label>Название театра</label>
              </li>
              <li>
                <label>Сумма к возврату</label>
              </li>
            </ul>
          </div>
          <button type="button" class="card-button">Вернуть</button>
        </div>
      <?php endfor; ?>
      </div>
    </div>

  </body>
</html>
