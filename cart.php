<?php
  session_start();
  $_SESSION['page'] = 'cart';
  $choosen_seat_num = count($_POST);
  if ($choosen_seat_num == 0){
    //echo (count($_POST));
    $_SESSION['message'] = 'Вы ничего не выбрали!';
  }
  unset($_SESSION['choosen_seats']);
  // echo $choosen_seat_num;
  for ($i=0; $i < $choosen_seat_num; $i++) {
    $_SESSION['choosen_seats'][$i] = array_keys($_POST)[$i];
  }

  require_once 'get_choosen_event.php';
  require_once 'in_cart.php';

 ?>

<!DOCTYPE html>
<html lang="en,ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/card.css">
    <title>Корзина</title>
  </head>
  <body>
    <?php require 'blocks/header.php'; ?>
    <?php require 'blocks/sidenav.php'; ?>
    <!-- <?php
    // for ($i=0; $i < $choosen_seat_num; $i++) {
    //   echo ($_SESSION['choosen_seats'][$i]);
    // }
     ?> -->
    <div class="event_main">
      <h2>Выбранные билеты</h2>
    </div>
      <div class="index_main">
        <?php if (isset($_SESSION['message'])): ?>
          <p>
            <?php echo ($_SESSION['message']);
            unset($_SESSION['message'])
             ?>
          </p>
        <?php else: ?>
        <?php for ($i=0; $i < $choosen_seat_num; $i++): ?>
        <div class="card">
          <div class="card-header">
            <h6>
              <?php
              echo ($_SESSION['choosen_event_info']['title']);
               ?>
            </h6>
          </div>
          <div class="card-body">
            <ul style="padding-left: 0; list-style: none;">
              <li>
                <label>Номер места:
                  <?php
                  echo $_SESSION['choosen_ticket'.$i]['seat'];
                   ?>
                </label>
              </li>
              <li>Стоимость:
                <?php
                echo $_SESSION['choosen_ticket'.$i]['price'].' руб.';
                 ?>
              </li>
              <!-- <li>3</li> -->
            </ul>
          </div>
          <a href="#">
            <button type="button" class="card-button">Убрать</button>
          </a>
        </div>
      <?php endfor; ?>

      <h6>Итого к оплате:
        <?php
        $_SESSION['sum'] = 0;
        for ($i=0; $i < $choosen_seat_num; $i++){
          $_SESSION['sum'] = $_SESSION['sum'] + intval($_SESSION['choosen_ticket'.$i]['price']);
        }
        // TODO: [sum][$i]
        echo $_SESSION['sum'].' руб';
         ?>
      </h6>
      <a href="pay.php">
      <button name="send_for_validation">Отправить на бронирование</button>
      </a>
      <?php endif; ?>
      </div>

      <?php require 'blocks/footer.php'; ?>

  </body>
</html>
