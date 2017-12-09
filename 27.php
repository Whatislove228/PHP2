<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 01.12.2017
 * Time: 17:16
 */
$colors = array('red','yellow','blue','gray','maroon','brown','green',);

$rows = rand(2 , 10);
$cols= rand(3 , 8 );

echo "<table>";
 for ($i= 0; $i < $cols; $i++ )
 {
     echo '<tr>';
     for($j = 0;$j < $rows; $j++)
     {

         $color = $colors[array_rand($colors)];
         $number = rand();
         echo "<td style = 'background-color: $color' > $number > </td>";
     }
     echo '<tr>';
 }
echo "</table>";

