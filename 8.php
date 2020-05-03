<?php

$array = ["Маша"=>31,"Коля"=>41,"Паша"=>39,"Антон"=>40];

/*
 * Написать скрипт PHP для сортировки массива
а) сортировка по возрастанию по значению
print_r($array);
б) сортировка по возрастанию  по ключу
print_r($array);
в) сортировка по убыванию по значению
print_r($array);
г) сортировка по убыванию по ключу
print_r($array);
Ключи и значения при сортировке должны быть сохранены
 */
asort($array);
foreach ($array as $key=> $item) {
    echo "$item : $key <br>";
}
echo "<hr>";
arsort($array);
    foreach ($array as $key=> $item) {
        echo "$item : $key <br>";
    }
echo "<hr>";

ksort($array);
foreach ($array as $key=> $item) {
    echo "$key: $item <br>";
}
echo "<hr>";

krsort($array);
foreach ($array as $key=> $item) {
    echo "$key: $item <br>";
}



