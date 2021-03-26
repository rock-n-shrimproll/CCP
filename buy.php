<?php
session_start();
$_SESSION['page'] = 'buy';
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
      <label style="margin-left: 10px; font-size: 25px">Дата и время проведения: </label>
      <!-- <?php
        // echo ($_SESSION['choosen_event']);
       ?> -->
       <br>
       <label style="margin-left: 10px; font-size: 25px">Название: </label>
       <br>
       <label style="margin-left: 10px; font-size: 25px">Место проведения: </label>

    </div>
    <div class="buy-main">
      <h3><b>Выбор места</b></h3>
        <form action="/cart.php" style="seat" method="post">
          <?php for ($i = 1; $i <= 25; $i++) {
            $mod = $i % 2;
            $disabled = 'disabled="true"';
            if ($mod == 1) {
              $disabled = '';
            }
            echo '<label class="seat-select" for="seat-' .$i. '">
            <input ' . $disabled . '" id="seat-' .$i. '" name="' . strval($i) . '" type="checkbox" ></input>
            <span>' . strval($i) . '</span></label>';
          } ?>
          <a href="cart.php">
            <button type="button" class="signupbtn">В корзину</button>
          </a>
        </form>

    </div>

    <script>
    function parseCookie(cookie) {
        return Object.fromEntries(cookie.split('; ').map(c => {
            const [key, ...v] = c.split('=');
            return [key, v.join('=')];
        }));
    }

    function setCookie(name, value, lifetime, path = '/') {
        const offset = -60 * (new Date()).getTimezoneOffset();
        document.cookie = `${name}=${value}; path=${path}; expires=${(new Date(Date.now() + lifetime + offset)).toUTCString()}`
    }

    let parsedCookie = parseCookie(document.cookie);

    if (parsedCookie.client) {
        setCookie('client', parsedCookie.client, 3 * 60 * 60);
        setTimeout();
    }
  </script>

  </div>
</body>

</html>
