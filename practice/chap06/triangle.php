<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 10:20
 */
function getTriangleArea(float $base, float $height): float{
    return $base * $height / 2;
}

$area = getTriangleArea(8 , '10');
print "三角形の面積は{$area}です";