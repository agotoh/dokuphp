<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 15:51
 */
function replaceContents(string $path, string ...$args){
    $data = file_get_contents($path);
    for($i = 0; $i < count($args); $i++){
        $data = str_replace('{'.($i).'}', $args[$i], $data);
    }
    return $data;

}

print replaceContents('data.dat', '鈴木太郎', '2016/5/1');