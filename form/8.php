<!--Создайте форму со всеми возможными элементами управления, присвоим им различные имена.
Выведите на экран результат отправки формы методом GET. Примечание: все параметры должны быть распечатаны.-->

<form action="8.php" method="get">
    <p><input type="checkbox" name="checkbox"></p>
    <p><input type="date" name="date"></p>
    <p><input type="email" name="email"></p>
    <p><input type="file" name="file"></p>
    <p><input type="hidden" name="hidden"></p>
    <p><input type="number" name="number"></p>
    <p><input type="password" name="password"></p>
    <p><input type="radio" name="radio"></p>
    <p><input type="range" name="range"></p>
    <p><input type="tel" name="tel"></p>
    <p><input type="submit" name="submit"></p>
</form>
<?php
if (!$_GET)
    exit();
else {
    foreach ($_GET as $key=>$item) {
        echo "$key=>$item<br>";
    }
}
