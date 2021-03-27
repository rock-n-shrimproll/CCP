<?php
  session_start();
  $_SESSION['page'] = 'client';
  //require 'vendor/connect.php';
  unset($_SESSION['last_purchase_num']);
  unset($_SESSION['message']);
  require 'get_last_pur.php';
 ?>

 <!DOCTYPE html>
 <html lang="en,ru" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="css/card.css">
     <title>Страница пользователя</title>
   </head>
   <body>
     <?php require "blocks/sidenav.php" ?>
     <?php require "blocks/header.php" ?>

     <div class="auth_main">
      <h3>Здравствуйте, <?php echo($_SESSION['client']['name']); ?>
         <?php if ($_SESSION['client']['status'] === "1"): ?>
          <img src="img/tick.png" alt="tick" style="width: 3%">
        <?php endif ?>
      </h3>

       <div class="container">
         <label style="margin-left: 10px">Сумма покупок</label>
         <?php
         if ($_SESSION['client']['summa'] == 0) {
           echo "0 руб.";
         }
         else {
           echo ($_SESSION['client']['summa']). ' руб.';
         }

         ?>
         <br>
         <label style="margin-left: 10px">Размер скидки</label>
         <?php echo ($_SESSION['client']['discount']).' %' ?>
          <br>
         <label style="margin-left: 10px">Сумма кредита</label>
         <?php echo ($_SESSION['client']['credit']).' руб.'; ?>
       </div>

       <h3>Последние покупки</h3>

       <div class="user_main">
         <?php if (isset($_SESSION['last_purchase_num'])): ?>
         <?php for ($i=1; $i <= 5; $i++): ?>
         <div class="card">
           <div class="card-header">
             <h6>
               <?php
               echo ($_SESSION['last_purchase'.$i]['title']);
                ?>
             </h6>
           </div>
           <div class="card-body">
             <ul style="padding-left: 0; list-style: none;">
               <li>
                 <label>
                   <?php
                   echo ($_SESSION['last_purchase'.$i]['title']);
                    ?>
                 </label>
               </li>
               <li>
                 <label>
                   <?php
                   echo ($_SESSION['last_purchase'.$i]['sum'].' руб.');
                    ?>
                 </label>
               </li>
               <li>
                 <label>
                   <?php
                   echo (date("d.m.Y", strtotime($_SESSION['last_purchase'.$i]['date_time'])));
                    ?>
                 </label>
               </li>
               <li>
                 <label>
                   <?php
                   echo (date("H:i", strtotime($_SESSION['last_purchase'.$i]['date_time'])));
                    ?>
                 </label>
               </li>
               <li>
                 <label>
                   <?php
                   echo ('Место № '.$_SESSION['last_purchase'.$i]['seat']);
                    ?>
                 </label>
               </li>
             </ul>
           </div>
           <button type="button" class="card-button">Вернуть</button>
         </div>
       <?php endfor; ?>
     <?php else: ?>
       <p>Покупки не совершались</p>
     <?php endif; ?>

       </div>
     </div>

     <?php require 'blocks/footer.php'; ?>


   </body>
 </html>
