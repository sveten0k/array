<?php

/*
 * Напишите функцию PHP, чтобы получить самый меньший ключ в массиве, который не равен 0.
 *
 * Пример массива
 * $array1 = [2 => 'a', 12 => 'b', 4 => 'f', 0 => 'a'];
 * $array2 = [-2 => 'a', 12 => 'b', 4 => 'f', 0 => 'a'];
 * function minKey ($array) {
 *      ........
 *      return $minKey;
 * }
 *
 * Результат
 * minKey ($array1); // 2
 * minKey ($array2); // -2
 */

$array1 = [2 => 'a', 12 => 'b', 4 => 'f', 0 => 'a'];
$array2 = [-2 => 'a', 12 => 'b', 4 => 'f', 0 => 'a'];

$minKey = "";
function minKey($array)
{
    $key = array_keys($array);
    foreach ($key as $item) {
        $minKey = $item;
        if ($minKey == 0) {
            continue;
        }
        return $minKey;
    }
}

$minKey1 = minKey($array1);
$minKey2 = minKey($array2);
echo $minKey1 . "<br>";
echo $minKey2;
