<!DOCTYPE html>
<html lang="ru, en">
  <head>
    <meta charset=utf-8>
    <link rel='stylesheet' href='css/index.css'>
    <link rel="stylesheet" href="css/card.css">
    <title>Мероприятия</title>
  </head>
  <body>
    <div class="sidenav">
      <div class="logo">
        <a href="index.php">
          <!-- надо что-то менять с ссылкой -->
          <img src="img/logo.jpg" class="logo" width=100%>
        </a>
      </div>
      <a href="events.php">Мероприятия</a>
      <a href="theatres.php">Адреса театров</a>
    </div>
    <?php if (condition) {
      // code...
      // если не авторизированный -- оставить баттоны реги и входа
    } ?>
    <div class="main">
      <h3>События</h3>
      <div class="container">
        <div class="card">
          <a href="#movie_$i">
            <img src="img/movie-$i.png" alt="movie-$i-title" width = 30%>
          </a>
          <div class="card_body">
            <p>Название фильма</p>
            <ul>
              <li>tag1</li>
              <li>tag2</li>
              <li>tag3</li>
            </ul>
          </div>
          <a href="#movie_$i">
            <p>
              <button type="button" name="buy_ticket">Купить билет</button>
              <!-- <script type="text/javascript">
              если не авторизован - onClick форма авторизации
              </script> -->
            </p>
          </a>
        </div>
      </div>


    </div>
  </body>
</html>
