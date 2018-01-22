<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 16:10
 */
function my_array_walk(array $array, callable $func){
    foreach($array as $key => $value){
        $func($value, $key);
    }
}

function showItem($value, $key){
    print "{$key}:{$value}<br/>";
}

$data = ['杉山', 'key2' => '長田', '杉沼', '和田'];

my_array_walk($data, 'showItem');