<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 16:30
 */
function my_array_walk(array $array, callable $func){
    foreach($array as $key => $value){
        $func($value, $key);
    }
}

$data = [100, 50, 10, 5];
$result = 0;
my_array_walk($data,
    function($value, $key) use(&$result){
        $result += $value;
    }
);

print "合計値：{$result}"; //165