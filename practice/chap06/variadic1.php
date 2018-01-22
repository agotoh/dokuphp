<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 15:47
 */
function sum(float ...$args): float{
    $result = 0;
    foreach($args as $arg){
        $result += $arg;
    }
    return $result;
}

print sum(7, 3, 10); //20
print sum(11, -5, 4, 88); //98