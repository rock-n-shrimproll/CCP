<?php
  session_start();
  $_SESSION['page'] = 'events';
  require_once 'get_event.php';

  // function show_label_place($i) {
  //   for ($j=0; $j < ; $j++) {
  //     // code...
  //   }
  //
  // }
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
            <a href="buy.php">
              <button type="submit" class="card-button">
                <?php $_SESSION['choosen_event'] = $_SESSION['event'.$i]['id'] ?>
                Выбрать место</button>
            </a>
          <?php endif; ?>
        </div>
      <?php endfor; ?>


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
