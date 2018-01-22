<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 16:27
 */
function my_array_walk(array $array, callable $func){
    foreach($array as $key => $value){
        $func($value, $key);
    }
}

$data = [100, 50, 10, 5];
my_array_walk($data,
    function($value, $key){
        print "{$key}:{$value}<br/>";
    }
);