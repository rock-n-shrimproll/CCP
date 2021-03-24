<?php
  session_start();
 ?>

<!DOCTYPE html >
<html lang="ru, en">
<head>
  <meta charset=utf-8>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/auth_form.css">
  <title>Авторизация</title>
</head>
<body>

<div class="container">

    <div class="sidenav">
      <div class="logo">
        <a href="index.php">
          <img src="img/logo.jpg" class="logo" width=100%>
        </a>
      </div>
      <a href="events.php">Мероприятия</a>
      <a href="theatres.php">Адреса театров</a>
    </div>

    <div class="main">
      <h1>Войти в аккаунт</h1>
      <form class="container" action="vendor/auth.php" method="post">
        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Введите login" name="login" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Войти как пользователь</button>

        <p class="msg">
          <?php
            echo($_SESSION['message']);
            unset($_SESSION['message']);
          ?>
        </p>

        <p>
          Ещё не аккаунта? <a href="reg_form.php">Зарегистрируйтесь</a>
        </p>
      </form>


      <h3>Вход для менеджеров</h3>

      <form class="container" action="vendor/auth_manager.php" method="post">
        <label for="login"><b>Login</b></label>
        <input type="text" placeholder="Введите login" name="login" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Войти как менеджер</button>

        <p class="msg">
          <?php
            echo($_SESSION['message']);
            unset($_SESSION['message']);
          ?>
        </p>

      </form>
    </div>

</div>

</body>
</html>
