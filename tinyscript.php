<?php
  // require 'blocks/connect.php';
  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'buro');

  $connect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  $sql = "INSERT INTO `client_1` (`id`, `status`, `name`) VALUES (DEFAULT, DEFAULT, 'assha')";

  if (!mysqli_query($connect, $sql)) {
    printf("Сообщение ошибки: %s\n", mysqli_error($connect));
}

 ?>

 <!--
 $link = mysqli_connect("localhost", "my_user", "my_password", "world");

 if (!mysqli_query($link, "SET a=1")) {
     printf("Сообщение ошибки: %s\n", mysqli_error($link));
 } -->
