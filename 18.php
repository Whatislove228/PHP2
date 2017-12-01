<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 19:45
 */
$arr = [1,2,3,4,5,6,7];

foreach ($arr as $item) {
    if($item == 6 || $item == 7) {
        echo "<b>$item</b></br>";
        continue;
    }
    echo "$item</br>";
}