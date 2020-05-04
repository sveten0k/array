<?php

/*
 * Напишите функцию PHP, чтобы получить самый большой ключ в массиве.
 *
 * Пример массива
 * $array = [2 => 'a', 12 => 'b', 4 => 'f', 1 => 'a'];
 * function maxKey ($array) {
 *      ........
 *      return $maxKey;
 * }
 *
 *
 * $maxKey =  maxKey ($array);
 * echo  maxKey; // 12
 * Вывести значение максимального ключа
 */
$array = [2 => 'a', 12 => 'b', 4 => 'f', 1 => 'a'];

function maxKey($array)
{
    $k = 0;
    foreach ($array as $key => $value) {
        if ($k < $key) {
            $k = $key;
        }
    }
    print_r($k);
    print_r($array[$k]);
}
maxKey($array);