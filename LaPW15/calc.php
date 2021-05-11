<?php 
  require_once "inc/data.inc.php";
  require_once "inc/lib.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Калькулятор</title>
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
    <h1>Калькулятор школьника</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
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