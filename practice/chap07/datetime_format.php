<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/24
 * Time: 9:49
 */
$now = new DateTime();
print('d');
print($now->format('d'));
print('<br/>');
print('D');
print($now->format('D'));
print('<br/>');
print('Y M d (D) G:i:s vミリ秒');
print($now->format('Y M d (D) G:i:s vミリ秒'));
print('<br/>');
print('ATOM');
print($now->format(DATE_ATOM));
