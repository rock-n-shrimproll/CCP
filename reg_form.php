<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="ru, en">
<head>
  <meta charset=utf-8>
  <link rel='stylesheet' href='css/reg_form.css'>
  <link rel="stylesheet" href="css/index.css">
  <title>Регистрация</title>
</head>
<body>
  <?php require "blocks/sidenav.php" ?>


  <!-- action="vendor/reg.php" method="post" -->

  <form class="reg_main">
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

    <button type="submit" class="signupbtn">Зарегистрироваться</button>

    <!-- <div class="clearfix">
      <button type="submit" class="signupbtn">Зарегистрироваться</button>
    </div> -->

    <!-- <p class="msg">Lorem ipsum</p> -->
    <br>
    <div class="container">
      Уже есть регистрация? <a href="auth_form.php">Войти</a>
    </div>
  </form>

  <script src="js/main.js" charset="utf-8">
  // TODO: alert("Такой логин уже занят!")
  </script>
</body>
</html>
