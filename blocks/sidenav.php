
<?php
  session_start();
?>


<div class="sidenav">
  <?php if (isset($_COOKIE['client'])): ?>
    <div class="logo">
      <a href="user.php">
        <img src="img/ticket.png" class="logo" width=80%>
      </a>
    </div>
  <?php else: ?>
    <div class="logo">
      <a href="index.php">
        <img src="img/ticket.png" class="logo" width=80%>
      </a>
    </div>
  <?php endif; ?>
  <a href="events.php">События</a>
  <a href="theatres.php">Адреса театров</a>
</div>
