<?php
  require_once "inc/data.inc.php";
  require_once "inc/lib.inc.php";
  $rows = 0;
  $cols = 0;
  $color = "";
  if (isset($_GET["rows"]) && isset($_GET["cols"]) && isset($_GET["color"])) {
    $rows = (int)$_GET["rows"];
    $cols = (int)$_GET["cols"];
    $color = $_GET["color"];
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
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
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
      <?php 
        drawTable($cols, $rows, $color);
      ?>
    <!-- Таблица -->
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