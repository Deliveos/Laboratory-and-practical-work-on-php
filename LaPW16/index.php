<?php 
  require_once "inc/data.inc.php";
  require_once "inc/lib.inc.php";

  // Установка локали и выбор значений даты
  setlocale(LC_ALL, "russian");
  $day = strftime('%d');
  $mon = strftime('%B');
  $year = strftime('%Y');

  /*
  * Получаем текущий час в виде строки от 00 до 23
  * и приводим строку к целому числу от 0 до 23
  */
  $hour = (int) strftime('%H');

  // Инициализируем переменную для приветствия
  $welcome = ''; 

  if ($hour <= 0 and $hour < 6) {
    $welcome = "Доброй ночи";
  } elseif ($hour <= 6 and $hour < 12) {
    $welcome = "Доброе утро";
  } elseif ($hour <= 12 and $hour < 18) {
    $welcome = "Добрый день";
  } elseif ($hour <= 18 and $hour < 23) {
    $welcome = "Добрый вечер";
  } else {
    $welcome = "Доброй ночи";
  }

  // Инициализация заголовков страницы
  $title = 'Сайт нашей школы';
  $header = "$welcome, Гость!";
  $id = strtolower(strip_tags(trim($_GET['id'])));
  switch($id) {
    case 'about':
      $title = 'О сайте';
      $header = 'О нашем сайте';
    break;
    case 'contact':
      $title = 'Контакты';
      $header = 'Обратная связь';
    break;
    case 'table':
      $title = 'Таблица умножения';
      $header = 'Таблица умножения';
    break;
    case 'calc':
      $title = 'Онлайн калькулятор';
      $header = 'Калькулятор';
    break;
  } 
?>

<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title?></title>
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
    <?php echo $header?> 
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
      switch($id){
        case 'about':
          include 'about.php';
        break;
        case 'contact':
          include 'contact.php';
        break;
        case 'table':
          include 'table.php';
        break;
        case 'calc':
          include 'calc.php';
        break;
        default:
          include 'inc/index.inc.php';
      }
    ?> 
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <? require_once "inc/menu.inc.php"; ?>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <? require_once "inc/bottom.inc.php"; ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>