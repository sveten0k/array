<!--Создайте массив имен (например, Вася, Коля, Даша и т.д.).
Создайте форму с полем ввода, которая позволяет вводить текст с шаблоном @name@ и
обрабатывая этот текст заменять шаблон на произвольное имя из массива.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="6.php" method="post">
    <p>Имя: <input type="text" name="name"/></p>
    <p><input type="submit" /></p>
</body>
</html>
<?php
    if (!$_POST['name'] != '@name@'){
        exit();

}
$array = ['Вася', 'Коля', 'Даша', 'Маша','Оля'];

$replaceName = $array[rand(0, (count($array)-1))];
echo str_replace('@name@', $replaceName, $_POST['name']);

