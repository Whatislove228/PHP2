<?php

$arr = [ 3, 6, 8, 20];

foreach ($arr as $item) {
    if($item == 2 || $item == 3 ||  $item ==4){
        echo "Eсть";
        break;
    }
    else {
        echo "Нету";
        break;
    }
}
