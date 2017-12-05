<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 16:05
 */

$arr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9];
     foreach ($arr as $key) {
         $string = implode("", $arr);
     }
     echo $string;
     echo "</br>";
     var_dump($string);

