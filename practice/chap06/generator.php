<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 16:34
 */
function myGen()
{
    yield 'あいうえお';
    yield 'かきくけこ';
    yield 'さしすせそ';

}

foreach(myGen() as $value){
    print $value.'<br/>';
}