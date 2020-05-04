<?php

$Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red', 'd' => 'Red'];

/*
 * Напишите PHP-функцию для изменения всех значений следующего массива в верхний или нижний регистр.
Значения в нижнем регистре.
Array ( [A] => blue [B] => green [c] => red [d] => red)
Значения в верхнем регистре.
Array ( [A] => BLUE [B] => GREEN [c] => RED )
 */

$arr = [];
foreach ($Color as $key=>$item){
    $arr[$key] = mb_strtoupper($item);
}

print_r($arr);