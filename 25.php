<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 01.12.2017
 * Time: 16:20
 */
for($i=0;$i<10;$i++) {

    $mas[] = rand(-5, 5);

}
foreach ($mas as $item) {
    echo $item ."<br>";
}

/*$max = $mas[0];
$min = $mas[0];
 for($i=0;$i<=10;++$i) {

     if($mas[$i]> $max)
     {
         $mas[$i] = $max;
     }
     if($mas[$i]< $min)
     {
         $mas[$i] = $min;
     }
 }

echo "Максимальный елемент массива $max";
echo "Минимальный елемент массива $min";
*/
echo "Минимальный елемент  " . min($mas).'<br>';
echo "Максимальный елемент   " .max($mas);

