<?php
  $leftMenu = [
    ['link'=>'Домой', 'href'=>'index.php'],
    ['link'=>'О нас', 'href'=>'about.php'],
    ['link'=>'Контакты', 'href'=>'contact.php'],
    ['link'=>'Таблица умножения', 'href'=>'table.php'],
    ['link'=>'Калькулятор', 'href'=>'calc.php']
  ];

  function drawMenu($menu, $vertical = true) {
    if ($vertical == true) {
      foreach ($menu as $item) {
        if ($item == $menu[0]) {
          echo '<ul><li><a href="'.$item["href"].'">'.$item["link"].'</a></li>';
          continue;
        } elseif ($item == $menu[count($menu)-1]) {
          echo '<li><a href="'.$item["href"].'">'.$item["link"].'</a></li></ul>';
          continue;
        } else {
          echo '<li><a href="'.$item["href"].'">'.$item["link"].'</a></li>';
        }
      }
    } else {
      foreach ($menu as $item) {
        if ($item == $menu[0]) {
          echo '<ul><li style="display:inline;"><a href="'.$item["href"].'">'.$item["link"].'</a></li>';
          continue;
        } elseif ($item == $menu[count($menu)-1]) {
          echo '<li style="display:inline;  margin-left:20px"><a href="'.$item["href"].'">'.$item["link"].'</a></li></ul>';
          continue;
        } else {
          echo '<li style="display:inline; margin-left:20px"><a href="'.$item["href"].'">'.$item["link"].'</a></li>';
        }
      }
    }
  }
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
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
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
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php 
      drawMenu($leftMenu, true);
    ?>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2021
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>