<?php

/*
 * Массив содержит два элемиента. Первый - число, второй - сколько нужно оставить знаков после запятой
 * Написать функцию PHP для возврата числа, которое будет содержать нужное количество знаков после запятой c jrheuktybtv
 *
 * function precision($array){
 *      return $number;
 * }
 *
 * $a1 = [1.4324324, 3];
 * $a2 = [3.39, 1];
 * $a3 = [5.4324, 2];
 * $a4 = [6.8423432, 0];
 *
 * precision($a1); // 1.432
 * precision($a2); // 3.4
 * precision($a3); // 5.43
 * precision($a4); // 7
 *
 */

$a1 = [1.4324324, 3];
$a2 = [3.39, 1];
$a3 = [5.4324, 2];
$a4 = [6.8423432, 0];

function precision($array){

    $number = round($array[0],$array[1]);
        return $number;
     }

echo precision($a1) ."<br>"; // 1.432
echo precision($a2) ."<br>"; // 3.4
echo precision($a3) ."<br>"; // 5.43
echo precision($a4) ."<br>"; // 7
