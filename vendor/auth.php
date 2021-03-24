<?php
  session_start();
  require_once "connect.php";

  $login = $_POST['login'];
  $password = $_POST['psw'];

  $check_user = $connect -> query("SELECT * FROM `client` WHERE `login`='$login' AND `password`='$password'");

  $client = $check_user -> fetch_assoc();
  // print_r($client);

  if (count($client) === 0) {

    $_SESSION['message'] = 'Неверные логин и пароль';
    header('Location: ../auth_form.php');
  }

  else {
    // $client = $check_user -> fetch_assoc();

    $_SESSION['client'] = array (
      "id" => $client['client_id'],
      "surname" => $client['surname'],
      "name" => $client['name'],
      "status" => $client['status'],
      "discount" => $client['discount'],
      "credit" => $client['credit'],
    );

    print_r($_SESSION['client']);
    $_SESSION['message'] = 'Успешная регистрация';
    header('Location: ../user.php');

    //setcookie('client', $user['login'], time() + 480,"user.php");
  }

 ?>


 <!-- if(count($user) == 0){
  echo "there is no such user";
   exit();
 }
 setcookie('user', $user['name'], time() + 480,"user.php");
 $mysql->close();
 header('Location: user.php') -->
