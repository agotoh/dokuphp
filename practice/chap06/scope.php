<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 10:40
 */
$x = 10;

function checkScope(): int {
    return ++$x;
}

function globalScope(): int{
    global $x;
    return ++$x;
}

function checkStatic() :int{
    static $x = 0;
    return ++$x;
}

print 'checkScope <br/>';
print checkScope(); //1

print '<br/>globalScope <br/>';
print globalScope(); //11
print $x; //11

print '<br/>checkStatic<br/>';
print checkStatic(); //1
print checkStatic(); //2
print $x; //11
