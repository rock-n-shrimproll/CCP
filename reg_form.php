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


  <form class="reg_main" action="vendor/reg.php" method="post">
    <h1>Регистрация</h1>

    <label for="surname"><b>Фамилия</b></label>
    <input type="text" placeholder="Введите фамилию" name="surname" required> <br>

    <label for="name"><b>Имя</b></label>
    <input type="text" placeholder="Введите имя" name="name" required> <br>

    <label for="email"><b>Почта</b></label>
    <input type="email" placeholder="Введите почту" name="email" required> <br>

    <label for="birthday"><b>День рождения</b></label>
    <input type="date" placeholder="гггг.мм.дд" name="birthday"
    pattern="\d{4}.\d{1,2}.\d{1,2}" required>

    <hr>

    <label for="login"><b>Логин</b></label>
    <input type="text" placeholder="Введите логин" name="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Введите пароль" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Подтвердите пароль" name="psw_confirm" required>

    <button type="submit" class="signupbtn">Зарегистрироваться</button>

    <!-- <div class="clearfix">
      <button type="submit" class="signupbtn">Зарегистрироваться</button>
    </div> -->

    <p class="msg">
      <?php
        echo($_SESSION['message']);
        unset($_SESSION['message']);
      ?>
    </p>
    <br>
    <div class="container">
      Уже есть регистрация? <a href="auth_form.php">Войти</a>
    </div>
  </form>

  <!-- <script charset="utf-8">
  function reg_func() {
    alert("<?php
    // echo($_SESSION['message']);?>");
    <?php
    // unset($_SESSION['message']);
    ?>
  }
  // TODO: alert("Такой логин уже занят!")
  </script> -->
</body>
</html>
