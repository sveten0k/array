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

$result = [];
foreach ($array as $key=>$value) {

    if (array_key_exists('sex',$value))
        unset($value['sex']);
    if (array_key_exists('height',$value))
        unset($value['height']);
    $result[] = $value;

}

print_r($result);

/*
 * Удалить из массива все элементы с ключами sex и height
 *
 * Результат
 $array = [
    [
        'name' => 'Маша',
        'lastname' => 'Иванова',
    ],
    [
        'name' => 'Оля',
        'lastname' => 'Петрова',
    ],
    [
        'name' => 'Коля',
        'lastname' => 'Сидоров',
    ],
    [
        'name' => 'Петя',
        'lastname' => 'Сурков',
    ],
];
 */