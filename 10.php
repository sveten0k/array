<?php

$Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];

/*
 * Напишите PHP-функцию для изменения всех значений следующего массива в верхний или нижний регистр.
Значения в нижнем регистре.
Array ( [A] => blue [B] => green [c] => red )
Значения в верхнем регистре.
Array ( [A] => BLUE [B] => GREEN [c] => RED )
 */

$flip = array_flip($Color);
$a = array_change_key_case($flip,CASE_UPPER);
$arr = array_flip($a);
print_r($arr);