<?php
  session_start();
  require_once "connect.php";

  $login = trim($_POST['login']);
  $password = trim($_POST['psw']);

  $check_user = $connect -> query("SELECT * FROM `client` WHERE `login`='$login' AND `password`='$password'");

  $client = $check_user -> fetch_assoc();
  // print_r($client);

  if (count($client) === 0) {

    $_SESSION['message'] = 'Неверные логин и пароль';
    header('Location: ../auth_form.php');
  }

  else {

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

    $current_client = $_SESSION['client']['id'];

    echo "$current_client";

    $create_client_purchase = $connect -> query("INSERT INTO `purchase`(`purchase_id`, `date_time`, `sum`, `payment`, `status`, `client_id`, `manager_id`)
    VALUES (DEFAULT,DEFAULT,0,DEFAULT,DEFAULT,'$current_client',DEFAULT)");

    $read_new_purchase = mysqli_query($connect, "SELECT * FROM `purchase` ORDER BY `purchase_id` DESC LIMIT 1");

    $purchase = mysqli_fetch_assoc($read_new_purchase);

    // echo (json_decode($purchase));

    $_SESSION['purchase'] = array (
      "id" => $purchase['purchase_id'],
      "date_time" => $purchase['date_time'],
      "sum" => $purchase['sum'],
      "status" => $purchase['status'],
      "payment" => $purchase['payment'],
      "client_id" => $purchase['client_id'],
    );

    print_r($_SESSION['purchase']);

    header('Location: ../user.php');

    // $lifetime = 5;
    // $name = 'client'.$client['client_id'];
    // $id = $client['client_id'];
    // setcookie($name, $id, time() + $lifetime, '/');

  }

 ?>
