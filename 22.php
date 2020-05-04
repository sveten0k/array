<?php
$array = [
    'Иванова' => [
        'name' => 'Маша',
        'lastname' => 'Иванова',
        'sex' => 'Женский',
        'height' => 'Высокая',
    ],
    'Петрова' => [
        'name' => 'Оля',
        'lastname' => 'Петрова',
        'sex' => 'Женский',
        'height' => 'Низкая',
    ],
    'Сидоров' => [
        'name' => 'Коля',
        'lastname' => 'Сидоров',
        'sex' => 'Мужской',
    ],
    'Сурков' => [
        'name' => 'Петя',
        'lastname' => 'Сурков',
        'height' => 'Высокий',
    ],
];


foreach ($array as $key=>$value) {
    if (array_key_exists('sex', $value))
        unset($value['sex']);
    if (array_key_exists('height', $value))
        unset($value['height']);
    $array[$key] = $value;

}

print_r($array);

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