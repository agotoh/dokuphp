<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/07
 * Time: 20:54
 */
$assoc1 = [
    'Apple' => 'Red',
    'Orange' => 'Yellow',
    'Melon' => 'Green'
];
$assoc2 = [
    'Grape' => 'Purple',
    'Apple' => 'Green',
    'Strawberry' => 'Red'
];
$result = $assoc1 + $assoc2;
print_r($result);

$ary1 = [1, 3, 5];
$ary2 = [2, 3, 6, 7];
$result = $ary1 + $ary2;
print_r($result);
