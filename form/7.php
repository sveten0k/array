<!--Создайте форму с многострочным полем ввода. Подключите к этому полю WYSIWYG-редактор.
Принимая данные формы, очистите все теги, кроме h1-h6, p, section и распечатайте полученный фрагмент.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>A Simple Page with CKEditor</title>
    <script src="/ckeditor/ckeditor.js"></script>
</head>
<body>
<form action="7.php" method="post">
    <textarea name="editor" id="editor1" rows="10" cols="80" placeholder="Введите текст"></textarea>
    <p><input type="submit" /></p>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
</form>
</body>
</html>

<?php
if (!$_POST) {
exit();
}
if (!array_key_exists('editor',$_POST)){
echo "Введите текст";
exit();
}else{
    $text = html_entity_decode($_POST['editor']);
    echo strip_tags($text,'<h1><h2><h3><h4><h5><h6><p><section>');
}




