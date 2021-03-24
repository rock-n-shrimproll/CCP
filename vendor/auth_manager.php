<?php
  session_start();
  require_once "connect.php";

  $login = $_POST['login'];
  $password = $_POST['psw'];

  $check_user = $connect -> query("SELECT * FROM `manager` WHERE `login`='$login' AND `password`='$password'");

  $client = $check_user -> fetch_assoc();
  print_r($client);

  if (count($client) === 0) {
    $_SESSION['message'] = 'Неверные логин и пароль';
    header('Location: ../auth_form.php');
  }

  else {
    $_SESSION['manager'] = array(
      "id" => $_SESSION['client_id'],
      "surname" => $_SESSION['surname'],
      "name" => $_SESSION['name'],
    );

    $_SESSION['message'] = 'Успешная регистрация';
    header('Location: ../manager.php');

    //setcookie('client', $user['login'], time() + 480,"user.php");
  }

 ?>
