## Создание и чтение журнала посещения страниц
### Упражнение 1: Уяснение задачи и основная настройка
Необходимо отследить пути перемещение пользователя по сайту и записать их в файл из расчета: один путь - одна строка
* В текстовом редакторе откройте файл `index.php`
* В верхней части файла в php-блоке введите следующий текст:
```php
// Имя файла журнала
define('PATH_LOG', 'path.log');
include 'inc/log.inc.php';
```
* Добавьте в навигационное меню пункт:
```html
<li><a href='index.php?id=log'>Журнал посещений</a></li>
```
* Сохраните файл `index.php`

### Упражнение 2: Создание файла журнала
* Откройте в текстовом редакторе файл `inc\log.inc.php`
* Создайте переменную `$dt` и присвойте ей текущую временную метку (timestamp)
* Создайте переменную `$page` и присвойте ей значение серверной переменной `REQUEST_URI`
* Создайте переменную `$ref` и присвойте ей значение серверной переменной `HTTP_REFERER`
* Создайте переменную `$path` и присвойте ей строку содержащую значения вышесозданных переменных. Строка должна иметь уникальный разделитель значений и выглядеть примерно так:
```
$dt|$page|$ref
```
Не забудьте указать в конце строки символ перевода на новую строку!
* Запишите сформированную строку в файл любым удобным для вас способом
Файл журнала должен храниться в папке log под именем, определенным в константе `PATH_LOG`
* Сохраните файл `inc\log.inc.php`
* Запустите браузер и введите в адресной строке http://mysite2.local
* Произвольно выбирая пункты меню Домой, Контакты, О нас, Информация и Гостевая книга, передвигайтесь по этим страницам
* Убедитесь, что данные записываются в файл в правильном формате

### Упражнение 3: Вывод данных из файла журнала
* Откройте в текстовом редакторе файл `inc\view-log.inc.php`
* Проверьте, существует ли файл журнала?
* Если файл существует, получите все содержимое файла в виде массива строк
* В цикле выведите списком данные из файла журнала в произвольном виде, например:
`21-06-2012 12:05:15 - /index.php?id=contacts -> http://mysite2.local/`
* Сохраните файл `inc\view-log.inc.php`
* Запустите браузер и введите в адресной строке http://mysite2.local
* Выберите пункт меню Журнал посещений
* Убедитесь, что данные корректно выводятся из файла журнала