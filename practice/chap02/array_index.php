<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/07
 * Time: 20:43
 */
$data = [1 => '山田', 2 => '掛谷',];
print $data[0];
print $data[1];
$data[] = '三中';
$data[0] = '最初';
print_r($data);