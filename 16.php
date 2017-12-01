<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 19:20
 */
$arr = [1,2,3,4,5,6,7,8,9];
foreach ($arr as $item => $value) {
    echo $value;
    if (($item+1)%3>=1){
        echo ",";
    }
    else {
        echo "</br>";
    }
}