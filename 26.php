<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 01.12.2017
 * Time: 16:41
 */

for($i=1;$i<9;$i++) {

    $mas[] = rand(-50,50);

}
foreach ($mas as $item) {
    echo $item . "<br>";
}
$mul = $mas[0];
for ($i=2;$i < count($mas);$i +=2) {
    $mul *= $mas[$i];
}
echo " Произведение элементов, которые больше ноля: " . $mul ."<br>";

foreach ($mas as $key => $value) {
    if($key%2 && $value > 0 ) {
        echo    " mas[$key] =>" . "$value<br>";
    }
}