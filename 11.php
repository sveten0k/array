<?php
$array = ["abcde", "abc", "de", "hjjj", "g", "wer"];

$len = array_map('strlen', $array);
$max = max($len);
$min = min($len);

$maxz = '';
$minz = '';
foreach ($array as $item) {
    if (strlen($maxz) < strlen($item))
        $maxz = $item;
}
foreach ($array as $value) {
    if (strlen($minz) == 0)
        $minz = $value;
    if (strlen($minz) > strlen($value))
        $minz = $value;
}

echo "Самая короткая строка - " . $minz . ", длина - " . $min . "<br> Самая длинная строка - " . $maxz . ", длина - " . $max;

/*
 * Напишите PHP-скрипт, чтобы получить самую короткую / самую длинную строку из массива.
 * Вывод:
 * Самая короткая строка - "g", длина - 1. Самая длинная строка - "abcde", длина - 5
 */