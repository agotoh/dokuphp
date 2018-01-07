<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/07
 * Time: 20:49
 */
print floor((0.1 + 0.7) * 10); //floorは切り捨て。結果は8にならず7になる
print("\n");
//任意制度数学関数を利用
//0.1 + 0.7 小数点1位の精度で
$add = bcadd(0.1, 0.7, 1);
$mul = bcmul($add, 10, 1);
print floor($mul); //8になる