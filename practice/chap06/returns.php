<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 15:57
 */
function max_min(float ...$args): array{
    return[max($args), min($args)];
}

$result = max_min(10, 2, -5, 3, 78);
print_r($result);
list($max, $min) = max_min(10, 2, -5, 3, 78);
print "最大値:{$max} 最小値:{$min}";
