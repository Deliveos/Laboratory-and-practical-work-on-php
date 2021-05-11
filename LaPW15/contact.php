<?php
  require_once "inc/data.inc.php";
  require_once "inc/lib.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <? require_once "inc/top.inc.php"; ?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <? require_once "inc/menu.inc.php"; ?>
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <? require_once "inc/bottom.inc.php"; ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>