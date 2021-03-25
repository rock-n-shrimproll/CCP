<?php
  session_start();
  $_SESSION['page'] = 'client';
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
      <h3>Здравствуйте, <?php echo($_SESSION['client']['surname']); ?>
         <?php if ($_SESSION['client']['status'] === "1"): ?>
          <img src="img/tick.png" alt="tick" style="width: 3%">
        <?php endif ?>
      </h3>

       <div class="container">
         <label style="margin-left: 10px">Сумма покупок</label>
         <?php echo "summa";
         // TODO: нужен purchase
         // $find_sum = $connect -> query("");
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
         <?php // TODO: переделать нумерацию ?>
         <?php for ($i=0; $i < 7; $i++): ?>
         <div class="card">
           <div class="card-header">
             <h6>Header</h6>
           </div>
           <div class="card-body">
             <ul style="padding-left: 0; list-style: none;">
               <li>
                 <label>Разннннннз</label>
               </li>
               <li>2</li>
               <li>3</li>
             </ul>
           </div>
           <button type="button" class="card-button">Вернуть</button>
         </div>
       <?php endfor; ?>
         <p>3</p>
       </div>
     </div>

   </body>
 </html>
