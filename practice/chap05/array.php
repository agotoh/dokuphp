<?php
/**
 * Created by PhpStorm.
 * User: agotoh
 * Date: 2018/01/22
 * Time: 9:47
 */
/**  count関数 **/
$data = [1,2,3];
print count($data)."<br />"; //3
$data2 = [];
for ($i = 1; $i<4; $i++){
    $data2[] = $data;
}
print_r($data2);

print "<br />".count($data2, COUNT_RECURSIVE)."<br />"; //3 + 9 = 12

/**  array_merge関数 **/
$ary1 = [1, 3, 5];
$ary2 = [2, 3, 6];
$result = array_merge($ary1, $ary2);
print_r($result);
print "<br />";

$assoc1 = ['a' => 'i', 'b' => 'j', 'c' => 'k'];
$assoc2 = ['a' => 'l', 'b' => 'm', 'd' => 'n'];
$result = array_merge($assoc1, $assoc2); //keyが同一の場合後勝ち
print_r($result);
print "<br />";

/** implode */
$data= ['PHP', 'Ruby', 'Python'];
print implode(',', $data)."<br />";

/** array_push, array_pop, array_shift, array_unshift */
$data = [1 ,2, 3];
print array_push($data, 4, 5); //5 要素数
print_r($data); //1,2,3,4,5
print array_pop($data); //5
print_r($data); //1,2,3,4
print array_shift($data); //1
print_r($data); //2,3,4,
print array_unshift($data, 6, 7, 8); //6
print_r($data); // 6,7,8,2,3,4
print "<br />";

/** array_splice */
$data= [1, 2, 3, 4, 5];
print_r(array_splice($data, 2, 3, [6 ,7 ,8])); // 3, 4, 5