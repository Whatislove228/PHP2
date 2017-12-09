<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 16:01
 */
$Array = [2, 5, 9, 15, 0, 4];

foreach ($Array as $item) {
    if ($item > 3 && $item < 10) {
        echo "$item</br>";
    }
}