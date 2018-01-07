<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/07
 * Time: 21:47
 */
print '<table>';
for($i=1; $i<=9; $i++ ){
    print '<tr>';
    for($j=1; $j<=9; $j++){
        $val = $i*$j;
        print "<td>{$val}</td>";
    }
    print '</tr>';
}
print '</table>';