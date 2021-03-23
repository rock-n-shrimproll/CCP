<?php
  session_start();
  require_once "connect.php";

  $login = $_POST['login'];
  $password = $_POST['psw'];

  $check_user = $connect -> query("SELECT * FROM `client` WHERE `login`='$login' AND `password`='$password'");

  $check_user = '';
  print_r($check_user);

  echo "ok";
  if (count($check_user) === 0) {

    $_SESSION['message'] = 'Неверные логин и пароль';
    header('Location: ../auth_form.php');
  }

 //  else {
 //    $client = $check_user -> fetch_assoc();
 //
 //    $_SESSION['client'] = [
 //      "id" -> $_SESSION['client_id'],
 //      "surname" -> $_SESSION['surname'],
 //      "name" -> $_SESSION['name'],
 //      "status" -> $_SESSION['status'],
 //      "discount" -> $_SESSION['discount'],
 //      "credit" -> $_SESSION['credit'],
 //    ]
 //
 //    $_SESSION['message'] = 'Успешная регистрация';
 //    header('Location: ../user.php');
 //
 //    //setcookie('client', $user['login'], time() + 480,"user.php");
 //  }
 //
 // ?>


 <!-- if(count($user) == 0){
  echo "there is no such user";
   exit();
 }
 setcookie('user', $user['name'], time() + 480,"user.php");
 $mysql->close();
 header('Location: user.php') -->
