<?php

$temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

/*
 * Напишите PHP-скрипт для расчета и отображения средней температуры, пяти самых низких и пяти самых высоких температур.
 * Средняя температура : 70.6
 * Самые низкие температуры : 60, 62, 63, 63, 64,
 * Самые высокие температуры : 76, 78, 79, 81, 85,
 */

$srt = array_sum($temperature)/count($temperature);
echo "Средняя температура : " . round($srt,1);
echo "<br>";

sort($temperature);
$out = array_slice($temperature, 0, 5);
$min = implode(", ", $out);
    echo "Самые низкие температуры : $min";
echo "<br>";

rsort($temperature);
$put = array_slice($temperature, 0, 5);
sort($put);
$max = implode(", ", $put);
echo "Самые высокие температуры : $max";








