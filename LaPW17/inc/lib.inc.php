<?php
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