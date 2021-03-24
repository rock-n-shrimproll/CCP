<!DOCTYPE html>
<html lang="en, ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' href='css/index.css'>
    <link rel="stylesheet" href="css/card.css">
    <title>Страница менеджера</title>
  </head>
  <body>
    <div class="sidenav">
      <div class="logo">
        <a href="index.php">
          <img src="img/logo.jpg" class="logo" width=100%>
        </a>
      </div>
      <a href="events.php">События</a>
      <a href="theatres.php">Адреса театров</a>
    </div>
    <div class="main">
      <h1>Здравствуйте, <?php echo "$_SESSION['manager']['surname']"; ?></h1>

      <div class="card">
        <p>Id покупки1</p>
        <div class="card_body">
          <ul>
            <li>buyer-id</li>
            <li>date</li>
            <li>sum</li>
          </ul>
        </div>
        <button type="button" name="cashback">Вернуть</button>
      </div>

      <div class="card">
        <h4>Id покупки1</h4>
        <hr>
        <div class="card_body">
          <ul>
            <li>buyer-id</li>
            <li>date</li>
            <li>sum</li>
          </ul>
        </div>
        <button type="button" name="cashback">Вернуть</button>
      </div>

      <div class="card">
        <h4>Id покупки1</h4>
        <hr>
        <div class="card_body">
          <ul>
            <li>buyer-id</li>
            <li>date</li>
            <li>sum</li>
          </ul>
        </div>
        <button type="button" name="cashback">Вернуть</button>
      </div>
    </div>

  </body>
</html>
