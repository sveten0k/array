<!--Создайте форму с многострочным полем ввода.
Отправляя форму методом POST найдите часто встречаемые слов из формы и
выведите их в порядке убывания частоты встречаемости слов.
Примечание: могут пригодится функции – разбиения строки по символам и нахождения встречаемого элементов в массиве.-->

<?php
$text = "";
if ($_POST){
    if (array_key_exists('text',$_POST)){
        $text = $_POST['text'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="5.php" method="post">
    <textarea name="text" rows="10" cols="80" placeholder="Введите текст"><?=$text?></textarea>
    <p><input type="submit" /></p>
</form>
</body>
</html>
<?php

if (!$_POST) {
    exit();
}
if (!array_key_exists('text',$_POST)){
    echo "Введите текст";
    exit();
}else{
    $arr = $_POST['text'];
}

$newArr = [];

$arr = explode(" ",$arr);
foreach ($arr as $value){
    if(!array_key_exists($value, $newArr))
        $newArr[$value] = 0;
    $newArr[$value]++;

}

print_r($newArr);