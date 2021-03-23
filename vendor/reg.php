<?php

session_start();

//print_r($_SESSION);

require 'connect.php';

 $surname = $_POST['surname'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $birthday = $_POST['birthday'];
 $login = $_POST['login'];
 $password = $_POST['psw'];
 $password_confirm = $_POST['psw_confirm'];

 if ($password === $password_confirm) {
   //$password = md5($password); //хеш пароля
   //уникальный логин
   mysqli_query($connect,
   "INSERT INTO `client` (`client_id`, `surname`, `name`, `email`, `birthday`, `regday`, `login`, `password`, `status`, `credit`, `discount`) VALUES (NULL, '$surname', '$name', '$email', '$birthday', CURRENT_TIMESTAMP, '$login', '$password', '0', '0', '0')");
  $_SESSION['message'] = 'Успешная регистрация';
  header('Location: ../auth_form.php');
 }
 else {
   $_SESSION['message'] = 'Пароли не совпадают';
   header('Location: ../reg_form.php');
 }
?>
