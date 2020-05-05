<?php
/*
 * Напишите сценарий PHP, который преобразует строку в массив, вставляет новый элемент в массив,
 * и потом преобразует массив обратно в строку.
 *
 * Исходная строка - 1 2 3 4 5
 * Добавить элемент $
 * Получаем строку - 1 2 3 4 $ 5
 *
 */
$str = "1 2 3 4 5";
$arr = str_split($str);
array_splice($arr,7,0," $");
$str2  = implode($arr);
echo $str2;