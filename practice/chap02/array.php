<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/05
 * Time: 10:11
 */
$data = ['山田','田中','鈴木'];
//print $data[1]; //田中
$data[] = '山本';
print_r($data);

$data[0] = 'アーサー';
print_r($data);
