<?
$visitCounter = 1;
$lastVisit = "";

if(isset($_COOKIE["visitCounter"])) {
  $visitCounter = (int)$_COOKIE["visitCounter"];
  $visitCounter += 1;
} 

  if(isset($_COOKIE["lastVisit"])) {
    $lastVisit = date("d-m-Y", $_COOKIE["lastVisit"]);
  }
