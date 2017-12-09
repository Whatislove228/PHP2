<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 01.12.2017
 * Time: 16:08
 */

$str = '1241435646464';
$digits = str_split($str);
$n=0;
foreach($digits as $item) {
    if($item == 4) {

        $n++;
    }
}
echo $n;