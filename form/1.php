
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="1.php" method="post">
    <p>Ваше имя: <input type="text" name="name" /></p>
    <p>Ваш пароль: <input type="password" name="password" /></p>
    <p><input type="submit" /></p>
</form>
</body>
</html>

<?php
if(!$_POST)
    exit();
echo htmlspecialchars($_POST['name']); ?>
<br>Ваш пароль <?php echo (int)$_POST['password'];?>
