<?php
  $num1 = null;
  $num2 = null;
  $operator = null;
  $result = null;
  $err_message = null;
  if (trim($_POST["num1"]) == "" || trim($_POST["num2"]) == "" || trim($_POST["operator"]) == "") {
    $err_message = "Заполнены не все поля, невозможно провести операцию";
  } else {
    if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operator"])) {
      $num1 = (int)$_POST["num1"];
      $num2 = (int)$_POST["num2"];
      $operator = $_POST["operator"];

      switch($operator) {
        case '+':
          $result = $num1 + $num2;
          break;
        case '-':
          $result = $num1 - $num2;
          break;
        case '*':
          $result = $num1 * $num2;
          break;
        case '/':
          $num2 == 0
          ? $err_message = "На 0 делить нельзя"
          : $result = $num1 / $num2;
          break;
        default: 
          $err_message = "Неверный оператор";
      }
    }
  }
?>
<!-- Область основного контента -->
<form action='index.php?id=calc' method="POST">
  <p><?= $result ?></p>
  <p style="color:red;"><?= $err_message ?></p>
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