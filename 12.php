<?php

/*
 * Напишите PHP-скрипт для генерации уникальных случайных чисел в диапазоне (11, 20).
 *
 * Пример вывода: 17 16 13 20 14 19 18 15 11 12
 * Используем https://www.php.net/manual/ru/function.rand.php
 * Используем цикл do while. Получаем случайное число rand(11,20). Проверяем, есть ли оно в массиве, если есть - генерим следующее.
 * Если нет - добавляем в массив.
 * Как только массив достигнет длины 10 элементов - оканчиваем цикл
 */

$arr = [];

do {
    $a = rand(11, 20);
    if (!in_array($a, $arr)) {
        $arr[] = $a;
    }
} while (count($arr) < 10);

print_r($arr);

