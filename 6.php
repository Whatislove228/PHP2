<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 15:40
 */
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

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