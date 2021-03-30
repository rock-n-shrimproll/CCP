<?php
  session_start();
 ?>

<!DOCTYPE html >
<html lang="ru, en">
<head>
  <meta charset=utf-8>
  <link rel="stylesheet" href="css/index.css">
  <!-- <link rel="stylesheet" href="css/auth_form.css"> -->
  <title>Авторизация</title>
</head>
<body>
  <?php require "blocks/sidenav.php" ?>

  <?php // TODO: развести папки стили ?>
  <div class="auth_main">
      <h3>Войти в аккаунт</h3>
      <form class="container" action="vendor/auth.php" method="post">
        <label for="login" style="margin-left: 10px"><b>Login</b></label>
        <input type="text" placeholder="Введите login" name="login" required>

        <label for="psw" style="margin-left: 10px"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <?php // TODO: нормальный стиль для кнопки! ?>
        <button type="submit" style="auth_button">Войти как пользователь</button>

        <p class="msg">
          <?php
            echo($_SESSION['message']);
            unset($_SESSION['message']);
          ?>
        </p>

        <p>
          Ещё нет аккаунта? <a href="reg_form.php" style = "text-decoration: none;">Зарегистрируйтесь</a>
        </p>
      </form>

      <hr>
      <h3>Вход для менеджеров</h3>

      <form class="container" action="vendor/auth_manager.php" method="post">
        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Введите login" name="login" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Войти как менеджер</button>


      </form>
    </div>

</div>

</body>
</html>
