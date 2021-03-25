<?php
  session_start();
  $_SESSION['page'] = 'buy';
 ?>

 <!DOCTYPE html>
 <html lang="ru" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <title>Выбор билета</title>
   </head>
   <body>
     <?php require "blocks/sidenav.php" ?>
     <?php require 'blocks/header.php'; ?>

     <div class="auth_main">
       <div class="container">
         <label for="">tre</label>
       </div>
       <div class="buy-main">
         <div class="dropdown">
	          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
		            Выбрать место
                <span class="caret"></span>
	          </button>
	          <ul style="dropdown-menu">
		            <!-- <li><a href="#">Пункт меню</a></li> -->
                <?php for ($i=0; $i < 5; $i++): ?>
                  <li class="dropdown-input"><label><input type="checkbox"> Checkbox</label></li>
                <?php endfor; ?>
  	        </ul>
          </div>

       </div>
       <img src="img/schema.jpg" alt="">
       <a href="cart.php">
         <button type="button" class="signupbtn">В корзину</button>
       </a>

     </div>
   </body>
 </html>
