<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 15:25
 */
function increment(int &$num): int{
    $num++;
    return $num;
}

$value = 10;
print increment($value); //11
print $value; //11