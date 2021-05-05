### Упражнение 1: Вывод текущей даты
Откройте в текстовом редакторе файл index.php
В области основного контента перед строкой 
`<h3>Зачем мы ходим в школу?</h3>`
напишите следующий текст:
 ```
<blockquote>
  <?php echo strftime('Сегодня %d-%m-%Y'); ?>
</blockquote>
  ```
Сохраните файл `index.php`
Запустите браузер и в адресной строке наберите: http://mysite.local/
Убедитесь, что нет ошибок и результат выводится на страницу

### Упражнение 2: Вывод текущей даты используя переменные
Откройте в текстовом редакторе файл index.php
В самом начале файла введите следующий текст:
```
<?php
  // Установка локали и выбор значений даты
  setlocale(LC_ALL, "russian");
  $day = strftime('%d');
  $mon = strftime('%B');
  $year = strftime('%Y');
?>
```
Внутри тэгов `<blockquote></blockquote>` вместо текста: `echo strftime('Сегодня %d-%m-%Y');`
введите следующий текст:
`echo 'Сегодня ', $day, ' число, ', $mon, ' месяц, ', $year, ' год.';`
Сохраните файл `index.php` и посмотрите результат в браузере
Внизу файла в блоке вместо 2021 выведете значение необходимой переменной
Сохраните файл `index.php`
Посмотрите результат в браузере.

### Упражнение 3: Вывод приветствия в зависимости от времени суток
Откройте в текстовом редакторе файл `index.php`
В начале файла в php-блоке напишите:
```
/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/
$hour = (int) strftime('%H');
$welcome = ''; // Инициализируем переменную для приветствия
```

Используя управляющую конструкцию if–elseif–else присвойте переменной `$welcome` значение, исходя из следующих условий
если число в переменной $hour попадает в диапазон:
* от 0 до 6-Доброй ночи
* от 6 (включительно) до 12-Доброе утро
* от 12 (включительно) до 18-Добрый день
* от 18 (включительно) до 23-Добрый вечер
Если число в переменной `$hour` не попадает ни в один из вышеперечисленных диапазонов, то присвойте переменной `$welcome` значение `Доброй ночи`

Между тэгами `<h1></h1>` вместо строки `Добро пожаловать на наш сайт!` напишите: `<?= $welcome ?>, Гость!`
Сохраните файл `index.php`
Посмотрите результат в браузере