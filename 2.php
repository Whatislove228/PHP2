<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 14:48
 */

$Array = [  1, 20, 15, 17, 24, 35 ];
$result = 0;
foreach ($Array as $item) {
    $result += $item;
}
echo $result;