<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="ru, en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' href='css/index.css'>
    <link rel="stylesheet" href="css/card.css">
    <title>Странциа пользователя</title>
  </head>
  <body>
    <div class="sidenav">
      <div class="logo">
        <a href="index.php">
          <img src="img/logo.jpg" class="logo" width=100%>
        </a>
      </div>
      <a href="events.php">События</a>
      <a href="theatres.php">Адреса театров</a>
    </div>
    <div class="container">
      <a href="vendor/exit.php">
        <div class="button">
            <button style="width:auto;">Выход из аккаунта</button>
        </div>
      </a>
    </div>

    <div class="main">

      <h1>Здравствуйте, <?php echo($_SESSION['client']['surname']); ?></h1>
      <!-- <?php
      //if ($_SESSION['client']['status'] === 1){
        // echo '<img src="img/tick.png" alt="trusted_user" width="3%">;'
      } ?> -->
      <!-- <img src="img/tick.png" alt="trusted_user" width="3%"> -->
      <div class="sale">
        <label>Сумма покупок</label> <br>
        <label>Размер скидки</label> <br>
        <label>Сумма кредита</label>
      </div>
      <h3>Последние покупки</h3>
        <div class="card">
          <h4>Id покупки1</h4>
          <hr>
          <div class="card_body">
            <ul>
              <li>date</li>
              <li>sum</li>
              <li>what's in</li>
            </ul>
          </div>
        </div>

        <div class="card">
          <h4>Id покупки2</h4>
          <div class="card_body">
            <ul>
              <li>date</li>
              <li>sum</li>
              <li>what's in</li>
            </ul>
          </div>
        </div>

        <div class="card">
          <h4>Id покупки3</h4>
          <div class="card_body">
            <ul>
              <li>date</li>
              <li>sum</li>
              <li>what's in</li>
            </ul>
          </div>
        </div>

    </div>



  </body>
</html>
