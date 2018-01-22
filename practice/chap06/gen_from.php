<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 16:50
 */
function readFiles(array $files){
    foreach ($files as $file){
        $gen = yield from readLines($file);
        print "{$file}の行数は{$gen}です";
    }
}

function readLines(string $path){
    $i = 0;
    $file = fopen($path, 'rb') or die('file not found');
    while($line = fgets($file, 1024)){
        $i++;
        yield $line;
    }
    fclose($file);
    return $i;
}

foreach (readFiles(['sample.dat', 'sample2.dat']) as $line ){
    print $line.'<br/>';
}

