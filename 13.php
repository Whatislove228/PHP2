<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 18:52
 */
// Таблица ужножения

for ($i=1;$i<=10;++$i)
{
    echo "</br>";
    for ($j=1;$j<=10;++$j)
    {
        $result = $i * $j;
        echo "$i * $j = $result</br>";
    }
}