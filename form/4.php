<!--Создайте форму с двумя полями: логина и пароля.
При введении логина «john» и пароля «qwerty» методом POST,
показывать секретную часть страницы, иначе говорить, что данные введены некорректно.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="4.php" method="post">
    <p>Логин: <input type="text" name="name" /></p>
    <p>Пароль: <input type="password" name="password" /></p>
    <p><input type="submit" /></p>
</form>
</body>
</html>

<?php
if(!$_POST)
    exit();
if (!array_key_exists('name',$_POST) || !array_key_exists('password',$_POST)) {
    echo "Логин или пароль не верны";
    exit();
}
if ($_POST['name'] !='john' || $_POST['password'] != 'qwerty'){
    echo "Данные введены некорректно";
    exit();
}else {
    echo "Секретная часть страницы";
}