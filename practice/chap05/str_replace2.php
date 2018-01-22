<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 9:28
 */
$str = ['PHPは良い言語です。','PHPは良いサーバ実行環境です。'];
$src = ['PHP','良い'];
$rep = ['PHP 7', '素晴らしい'];
$str2 = str_replace($src, $rep, $str, $cnt);
print "{$cnt}個"."\n";
print_r($str2);
