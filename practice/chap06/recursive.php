<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 16:07
 */
function factorical(int $num): int{
    if ($num !==0) { return $num * factorical($num -1);}
    return 1;
}

print factorical(5); // 5*3*4*2*1=120