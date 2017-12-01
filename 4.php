<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 30.11.2017
 * Time: 15:13
 */
/*$Array = [
    [
        'green'=> 'зеленый'
    ],[
       'red' => 'красный'
    ],[
        'white'=> 'Белый'
    ],[
        'blue' => 'голубой'
    ]

];*/
$Array = array('green' => 'зеленый','red' => 'красный','blue' => 'голубой');
foreach ($Array as $key => $value) {
    echo "$key - $value</br>";
}