<?php
  $rows = 0;
  $cols = 0;
  $color = "";

  if (isset($_GET["rows"]) && isset($_GET["cols"]) && isset($_GET["color"])) {
    $rows = (int)$_GET["rows"];
    $cols = (int)$_GET["cols"];
    $color = $_GET["color"];
  }

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

  function drawTable($cols, $rows, $color) {
    if ($rows != 0 && $cols != 0 && $color != "") {
      echo "<table border=\"1\">";
      echo "<thead><td>";
      for ($i=1; $i <= $cols; $i++) { 
        echo "<th bgcolor=\"".$color."\" align=\"center\"><font color=\"#fff\">".$i."</font></th>";
      }
      echo "</td></thead>";

      for ($i=1; $i <= $rows; $i++) { 
        echo "<tr>";
        echo "<th bgcolor=\"".$color."\" align=\"center\"><font color=\"#fff\">".$i."</font></th>";
        for ($j=1; $j <= $cols; $j++) { 
          echo "<td>".$i*$j."</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    } 
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
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
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