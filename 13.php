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
 */
$array = [2 => 'a', 12 => 'b', 4 => 'f', 1 => 'a'];

function maxKey ($array)
{
    $key = array_keys($array);
    //$maxKey = max($key);
    return $maxKey = max($key);
}
$maxKey =  maxKey ($array);
echo  $maxKey;