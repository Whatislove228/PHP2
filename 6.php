<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 15:40
 */
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

$en= print_r(array_keys($arr));
$ru= print_r(array_values($arr));
$english= explode(" ",$en);

foreach ($english as $item){
    echo $item;
}

/*
$en[] = 0;
$ru[] = 0;
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
foreach ($en as $key) {
    echo "$key ";
}
echo "</br>";
foreach ($ru as $key) {
    echo "$key ";
}
echo "</br>";

var_dump($en);
echo "</br>";
var_dump($ru);
*/