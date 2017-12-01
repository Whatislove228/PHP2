<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 14:54
 */

$Array = [26, 17, 136, 12, 79, 15];
 $result = 0;
foreach ($Array as $item) {
    $result += pow($item,2);
}
echo $result;