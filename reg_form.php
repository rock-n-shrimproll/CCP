<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="ru, en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset=utf-8>
  <link rel='stylesheet' href='css/reg_form.css'>
  <link rel="stylesheet" href="css/index.css">
  <title>Регистрация</title>
</head>
<body>
  <div class="sidenav">
    <div class="logo">
      <a href="index.php">
        <img src="img/logo.jpg" class="logo" width=100%>
      </a>
    </div>
    <a href="events.php">Мероприятия</a>
    <a href="theatres.php">Адреса кинотеатров</a>
  </div>
  <form class="container" action="vendor/reg.php" method="post">
    <h1>Регистрация</h1>

    <label for="surname"><b>Фамилия</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" required> <br>

    <label for="name"><b>Имя</b></label>
    <input type="text" placeholder="Enter Name" name="name" required> <br>

    <label for="email"><b>Почта</b></label>
    <input type="email" placeholder="Enter email" name="email" required> <br>

    <label for="birthday"><b>День рождения</b></label>
    <input type="date" placeholder="yyyy.mm.dd" name="birthday"
    pattern="[1900-2002]{4}.[01-12]{2}.[01-31]{2}" required>

    <hr>

    <label for="login"><b>Логин</b></label>
    <input type="text" placeholder="Enter Login" name="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_confirm" required>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Зарегистрироваться</button>
    </div>

    <p class="msg">
      <?php
        echo($_SESSION['message']);
        unset($_SESSION['message']);
      ?>
    </p>

    <div class="container">
      Уже есть регистрация? <a href="auth_form.php">Войти</a>
    </div>
  </form>
</body>
</html>
