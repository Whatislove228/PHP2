<?php

$e = 2 && 3 && 4;

$arr = [ 2, 6, 8, 20];

foreach ($arr as $item) {
    if($item == 2 && 3 && 4){
        echo "Eсть";
        break;
    }
    else {
        echo "Нету";
        break;
    }
}
