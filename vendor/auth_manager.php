<?php
  session_start();
  require_once "connect.php";

  $login = $_POST['login'];
  $password = $_POST['psw'];

  $check_user = $connect -> query("SELECT * FROM `manager` WHERE `login`='$login' AND `password`='$password'");

  $manager = $check_user -> fetch_assoc();
  print_r(json_encode($manager));

  if (count($manager) === 0) {
    $_SESSION['message'] = 'Неверные логин и пароль';
    header('Location: ../auth_form.php');
  }
  else {
    $_SESSION['manager'] = array(
      "id" => $manager['manager_id'],
      "surname" => $manager['surname'],
      "name" => $manager['name'],
    );

    print_r($_SESSION['manager']);

    $_SESSION['message'] = 'Успешная регистрация';
    header('Location: ../manager.php');
  }

 ?>
