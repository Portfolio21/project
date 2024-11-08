<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

//посчитать длину массива
$count = count($arr);

//получить сумму 4,5,6 элемента
$arraySumm = $arr[3] + $arr[4] + $arr[5];

//переместить первые 4 элемента массива в конец массива
$firstElem = $arr[0];
$secondElem = $arr[1];
$thirdElem = $arr[2];
$forthElem = $arr[3];
unset($arr[0]);
unset($arr[1]);
unset($arr[2]);
unset($arr[3]);
$arr[] = $firstElem;
$arr[] = $secondElem;
$arr[] = $thirdElem;
$arr[] = $forthElem;
var_dump($count,  $arraySumm, $arr);

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'foure' => 5,

    'five' => 13,

    'six' => 37,

];

//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$result = array_diff_key($secondArr, $firstArr);

//найти все элементы которые присутствую в первом и отсутствуют во втором
$result2 = array_diff_key( $firstArr, $secondArr);

//найти все элементы значения которых совпадают
$result3 = array_uintersect($firstArr, $secondArr, "strcasecmp");

//найти все элементы значения которых отличается
$keysFirstArray = array_flip($firstArr);
$elementvalues = [];
$sameValue = true;
$elementNumber = 0;
foreach ($firstArr as $key => $value) {
    if (isset($secondArr[$key]) && $secondArr[$key] !== $value) {
        $elementvalues[$key] = $value;
    }
}
var_dump($result, $result2, $result3, $elementvalues);


$firstArr1 = [

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

//получить все вторые элементы вложенных массивов
$elementNumber = 0;
$secondElements = [];
foreach ($firstArr1 as $key => $value) {
    $elementNumber = 0;
    if (is_array($value)) {
        foreach ($value as $k => $v) {
            if ($elementNumber === 1) {
                $secondElements[$k] =  $v;
            }

            $elementNumber++;
        }
    }

}
var_dump($secondElements);

//получить общее количество элементов в массиве
$counter = 0;
array_walk_recursive( $firstArr1, function($value, $key) use (&$counter) {
    $counter++;
}, $counter);
echo "counter : $counter";

//получить сумму всех значений в массиве
$summ = 0;
array_walk_recursive( $firstArr1, function($value, $key) use (&$summ) {
    $summ = $summ + $value;
}, $summ);
echo "summ : $summ";

?>
