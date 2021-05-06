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
  <title>О сайте</title>
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
    <h1>О нашем сайте</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <p>
      Сайт создан на общественных началах и управляется на некоммерческой основе. Все фотографии и материалы предоставлены и используются с ведома и при участии администрации школы.
    </p>
    <h3>Цели создания проекта</h3>
    <ol>
      <li>поднятие престижа нашей школы.</li>
      <li>для информирования родителей будущих учеников нашей школы.</li>
      <li>для возобновления утраченных связей между выпускниками и учителями, с предоставлением им информационного пространства для общения.</li>
      <li>для общения учеников во внеурочное время.</li>
    </ol>
    <h3>Советы и предупреждения</h3>
    <p>
      Сайт оптимизирован под все браузеры. Наилучшее качество просмотра достигается при разрешении экрана монитора - 1280 на 1024 точек.
    </p>
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