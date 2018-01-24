<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/24
 * Time: 10:23
 */
$fmt = 'Y年m月d日 H:i:s';
$time = '2016年08月05日 11:10:22';
$dt = Datetime::createFromFormat($fmt, $time);
print $dt->format('Y-m-d H:i:s');
print '<br/>';
$dt->add(new DateInterval('P3M')); //11月
print $dt->format('Y-m-d H:i:s');