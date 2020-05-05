
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="2.php" method="post">
    <p>Город: <input type="text" name="gorod" /></p>
    <p><input type="submit" /></p>
</form>
</body>
</html>

<?php
$ceu = ["Rome", "Luxembourg", "Brussels", "Copenhagen", "Helsinki", "Paris", "Bratislava", "Ljubljana", "Berlin", "Athens", "Dublin",
    "Amsterdam", "Lisbon", "Madrid", "Stockholm", "London", "Nicosia", "Vilnius", "Prague", "Tallin", "Budapest", "Riga", "Valetta", "Vienna", "Warsaw"
];

foreach ($ceu as $value)
{
}
if(!$_POST){
    exit();
}else $_POST['gorod'];
{
    echo $_POST['gorod'];
}
