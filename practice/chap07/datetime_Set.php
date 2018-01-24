<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/24
 * Time: 9:44
 */
$now = new DateTime();
print $now->format('Y/m/d h:i:s');

$now->setDate(2016,1,12);
$now->setTime(1, 10, 50);
print $now->format('Y/m/d h:i:s');

