<?php
  session_start();
 ?>


<div class="header">
  <div class="header-title">
    <?php if ($_SESSION['page'] === 'index'): ?>
      <h1>Главная</h1>
    <?php endif; ?>
    <?php if ($_SESSION['page'] === 'events'): ?>
      <h1>События</h1>
    <?php endif; ?>
    <?php if ($_SESSION['page'] === 'client'): ?>
      <h1>Страница пользователя</h1>
    <?php endif; ?>
    <?php if ($_SESSION['page'] === 'manager'): ?>
      <h1>Страница менеджера</h1>
    <?php endif; ?>
    <?php if ($_SESSION['page'] === 'theatres'): ?>
      <h1>Адреса театров</h1>
    <?php endif; ?>
    <?php if ($_SESSION['page'] === 'cart'): ?>
      <h1>Корзина</h1>
    <?php endif; ?>

  </div>
  <div class="header-actions">

    <!-- <?php if (condition): ?>
<?php // TODO: если получена какая-то сессия или какой-то куки, то выводим только кнопку выйти из аккаунта ?>
    <?php endif; ?> -->

    <div class="reg_button">
      <a href="reg_form.php">
          <button style="reg_button">Регистрация</button>
      </a>
    </div>

    <div class="auth_button">
      <a href="auth_form.php">
          <button style="auth_button">Войти</button>
      </a>
    </div>

    <div class="exit_button">
      <a href="vendor/exit.php">
          <button style="auth_button">Выйти</button>
      </a>
    </div>

  </div>
</div>
