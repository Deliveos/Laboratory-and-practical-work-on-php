<?
$fd = fopen("log/".PATH_LOG, 'r') or die("не удалось открыть файл");
echo "<div><ul>";
while(!feof($fd))
{
  $data = explode("|", htmlentities(fgets($fd)));

  if ($data[0] == "") {
    break;
  }
  $date = date("d-m-Y H:i:s", $data[0]);

  echo "<li>".$date."</li>";
  echo "<p><strong>From</strong> ".$data[1]." <strong>to</strong> ".$data[2]."</p>";
}
echo "</ul></div>";
fclose($fd);