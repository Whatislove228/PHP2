<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 21:29
 */

for ($i=1;$i <= 9;$i++)
{
    $str = '';
    for ($j=1; $j <= $i;$j++)
    {
        $str .= $j;

    }
    echo $str . "<br>";
}