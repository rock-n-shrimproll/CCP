<?php
  session_start();
  $_SESSION['page'] = 'cart';

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
    <?php
    echo(json_encode(array_keys($_POST))); // вывод выбранных мест, в $_POST будет типа {"1":"on", "2": "on"} - {"id места": "on"}
     ?>
    <div class="event_main">
      <h2>Выбранные билеты</h2>
      <button type="submit" name="send_for_validation">Отправить на бронирование</button>
    </div>
      <div class="index_main">
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
          <a href="#">
            <button type="button" class="card-button">Убрать</button>
          </a>
        </div>

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
    }
  </script>

  </body>
</html>
