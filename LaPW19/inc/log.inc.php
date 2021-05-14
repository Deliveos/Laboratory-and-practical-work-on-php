<?
$date = new DateTime();
$dt = $date->getTimestamp();
$page = $_SERVER["REQUEST_URI"];
$ref = $_SERVER["HTTP_REFERER"];
$path = "$dt|$page|$ref\n";

$fd = fopen("log/".PATH_LOG, 'a') or die("Could not open file");
fwrite($fd, $path);
fclose($fd);