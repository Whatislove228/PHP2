<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 19:39
 */

$month = 4;
$arr = [1,2,3,4,5,6,7,8,9,10,11,12];

foreach ($arr as $item) {
    if($item == $month) {
        echo "<b>$item</b></br>";
        continue;
    }
    echo "$item</br>";
}