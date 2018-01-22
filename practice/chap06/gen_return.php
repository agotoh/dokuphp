<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 16:44
 */
function readLines(string $path){
    $i = 0; //line num
    $file = fopen($path, 'rb') or die('not found file');
    while ($line = fgets($file, 1024)){
        $i++;
        yield $line;
    }
    fclose($file);
    return $i;
}

$gen = readLines('sample.dat');
foreach($gen as $line){
    print $line.'<br />';
}

print "{$gen->getReturn()}行ありました";