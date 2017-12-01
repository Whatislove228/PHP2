<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 19:49
 */

$day = 4;
$arr = [1,2,3,4,5,6,7];

foreach ($arr as $item) {
    if($item == $day) {
        echo "<i>$item</i></br>";
        continue;
    }
    echo "$item</br>";
}