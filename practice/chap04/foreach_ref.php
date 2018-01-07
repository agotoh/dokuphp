<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/07
 * Time: 21:44
 */
$data = ['A','B','C'];
//参照渡しで元の配列を変更
foreach ($data as &$value){
    $value = 'New'. $value;
}
print_r($data)

