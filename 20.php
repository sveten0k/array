<?php

$array = [
    [
        'name' => 'Маша',
        'lastname' => 'Иванова',
        'sex' => 'Женский',
        'height' => 'Высокая',
    ],
    [
        'name' => 'Оля',
        'lastname' => 'Петрова',
        'sex' => 'Женский',
        'height' => 'Низкая',
    ],
    [
        'name' => 'Коля',
        'lastname' => 'Сидоров',
        'sex' => 'Мужской',
    ],
    [
        'name' => 'Петя',
        'lastname' => 'Сурков',
        'height' => 'Высокий',
    ],
];


foreach ($array as $key => $item) {

    if (!array_key_exists('lastname',$item))
        echo "Фамилия: не известен<br>";
    else
        echo "Фамилия:" . $item["lastname"] . "<br>";


    if (!array_key_exists('name',$item))
        echo "Имя: не известен<br>";
    else
        echo "Имя:" . $item['name'] . "<br>";


    if (!array_key_exists('sex',$item))
        echo "Пол: не известен<br>";
    else
        echo "Пол:" . $item['sex'] . "<br>";


    if (!array_key_exists('height',$item))
        echo "Рост: не известен<br>";
    else
        echo "Рост:" . $item['height'] . "<br>";
    echo "<hr>";

}

/*
 * Вывести все значения из массива по шаблону
 * Фамилия:
 * Имя:
 * Пол:
 * Рост:
 *
 * Если значения в массиве нет - пишем - не известен
 *
 * Пример:
 *
 * Фамилия: Иванова
 * Имя: Маша
 * Пол: Женский
 * Рост: Высокая
 *
 * Фамилия: Сидоров
 * Имя: Коля
 * Пол: Мужской
 * Рост: Не известен
 *
 */