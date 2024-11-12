<?php


//Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.

$array = [
    "Lang" => [
        "php" => [
            "exampleOne" => [11, "trait", 12 , [23, 34, "class", [55, "interface"]]],
            "exampleTwo" => ["class" => [63, 47, "interface", ["trait" => [88, "enum"]]]]
        ],
        "java" => [
            99, "enum", [100, "interface", [101, "trait", [120, 130, "class"]]]
        ],
        "c++" => ["trait", [134, "interface", [145, 146, ["enum", "class" , "test"]]]]
    ],
];

function getElementsByElementNumber($array , $elementNumber) {
    $elements = [];

    foreach ($array as $value) {
        if (is_array($value)) {
            if (isset($value[$elementNumber]) && !is_array($value[$elementNumber])) {
                $elements[] = $value[$elementNumber];
            }

            $elements = array_merge($elements, getElementsByElementNumber($value, $elementNumber));
        }
    }

    return $elements;
}

var_dump(getElementsByElementNumber($array , 1));

//2 Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
function countLetters($string, $symbol = 'b') {

    if(!is_string($string)) {
        return false;
    }

    $tolower = mb_strtolower($string);

    return substr_count($tolower, $symbol);
}

var_dump(countLetters('baloon bamble ble'));

//3 Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

$array = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'foure' => 5,

    'five' => [

        'three' => 32,

        'foure' => 5,

        'five' => 12,
    ],

];

function sumCalculete($array) {
    $summ = 0;
    array_walk_recursive( $array, function($value, $key) use (&$summ) {
        $summ = $summ + $value;
    }, $summ);

    return $summ;
}

var_dump(sumCalculete($array));

//4 Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float
function getCountSmallSquare($big , $small) {
    return fdiv($big, $small);
}

var_dump(getCountSmallSquare(20 , 9));
