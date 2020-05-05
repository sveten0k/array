<!--Создайте форму для нахождения ипотечного аннуитетного платежа.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="3.php" method="post">
    <p>Сумма: <input type="number" name="summa" /></p>
    <p>Срок ипотеки в месяцах: <input type="number" name="srok" /></p>
    <p>Ставка в %: <input type="text" name="stavka" /></p>
    <p><input type="submit" /></p>
</form>
</body>
</html>
<?php
if (!$_POST){
    exit();
}
if (!$_POST['stavka']) {
    echo "Введите процентную ставку";
    exit();
}else {
    $stavka = ($_POST['stavka']);
}
if (!$_POST['srok']) {
    echo "Введите срок ипотеки";
    exit();
}else {
    $srok = ($_POST['srok']);
}
if (!$_POST['summa']){
    echo "Введите сумму ипотеки";
    exit();
}else {
    $summa = ($_POST['summa']);
}
function ipoteka($stavka,$srok,$summa){
    $estavka = $stavka/12/100;
    $obst = pow((1 + $estavka),$srok);
    $platej = $summa * $estavka * $obst / ($obst - 1);
    echo round($platej,2);
}
ipoteka($_POST['stavka'],$_POST['srok'],$_POST['summa']);

