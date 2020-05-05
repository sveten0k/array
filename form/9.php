<!--Создайте форму, атрибут action которой, должен содержать строку «?param=2» и методом отправки POST.
Распечатайте содержимое массивов GET и POST-данных из формы.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="9.php?param=2" method="post">
    <p>Имя: <input type="text" name="name"/></p>
    <p><input type="submit" /></p>
</form>
</body>
</html>

<?php
if (!$_POST && !$_GET) {
    exit();
}
print_r($_GET);
print_r($_POST);
