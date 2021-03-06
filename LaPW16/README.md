## Передача параметров на сервер
### Упражнение 1: Создание подключаемых файлов
* В текстовом редакторе откройте файл `about.php`
* Удалите всё, кроме содержимого блока `<!-- Область основного контента -->`
* Сохраните файл `about.php` 
* В текстовом редакторе откройте файл `contact.php`
* Удалите всё, кроме содержимого блока `<!-- Область основного контента -->`
* Сохраните файл `contact.php`
* В текстовом редакторе откройте файл `calc.php`
* Удалите всё, кроме содержимого блока `<!-- Область основного контента -->`
* Сохраните файл `calc.php`

### Упражнение 2: Изменение меню
* В текстовом редакторе откройте `файл data.inc.php`
* Необходимо изменить значения во всех элементах `href` массива `$leftMenu` на `index.php` и добавить параметр, который будет передавать методом GET уникальные значения
* Измените значения, которые в результате могут выглядеть так:
```
index.php
index.php?id=about
index.php?id=contact
index.php?id=table
index.php?id=calc
```
Сохраните файл `data.inc.php`

### Упражнение 3: Приём данных от пользователя
* В текстовом редакторе откройте файл `index.php`
* В верхней части файла перед закрывающим тэгом `?>` напишите:
```php
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
      $title = 'Он-лайн калькулятор';
      $header = 'Калькулятор';
    break;
  }
```
* Между тэгами `<title></title>` напишите:
```php
<?php echo $title; ?>
```
* В блоке `<!-- Заголовок -->` между тэгами `<h1></h1>` напишите:
```php
<?php echo $header; ?>
```
* В блоке `<!-- Область основного контента -->` удалите всё содержимое и напишите:
```php
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
```
* Сохраните файл `index.php`
* Посмотрите результат в браузере. Обратите внимание, что файл `table.php` пока не готов к использованию

### Упражнение 4: Допиливаем таблицу умножения
* В текстовом редакторе откройте файл `table.php`
* Удалите всё, кроме блока `<!-- Область основного контента -->`
* В верхней части файла напишите:
```php
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cols = abs((int) $_POST['cols']);
    $rows = abs((int) $_POST['rows']);
    $color = trim(strip_tags($_POST['color']));
  }
  $cols = ($cols) ? $cols : 10;
  $rows = ($rows) ? $rows : 10;
  $color = ($color) ? $color : 'yellow';
?>
```
* В блоке `<!-- Таблица -->` исправьте вызов функции на:
```php
drawTable($cols, $rows, $color);
```
* В значении атрибута action тэга `<form>` напишите:
```php
<?= $_SERVER['REQUEST_URI']?>
```
* Добавьте в тэг `<form>` атрибут method со значением POST
* Сделайте так, чтобы введенные значения оставались в текстовых полях формы после перезагрузки страницы
* Сохраните файл table.php
* Посмотрите результат в браузере