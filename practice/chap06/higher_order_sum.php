<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 16:22
 */
function my_array_walk(array $array, callable $func){
    foreach($array as $key => $value){
        $func($value, $key);
    }
}

$result = 0;
function sum(float $value, int $key){
    global $result;
    $result += $value;
}

$data = [100, 50, 10, 5];
my_array_walk($data, 'sum');
print "合計値: {$result}";