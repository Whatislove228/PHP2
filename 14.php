<?php

$arr = [1,2,19, 13, 0, 10];

for($i=0;$i<=count($arr);$i++) {
    if ( $arr[$i] == 2 || $arr[$i] == 3 || $arr[$i] == 4 ){
        echo "Eсть";
        break;
    }
    if( !$arr[$i] == 2 || !$arr[$i] == 3 || !$arr[$i] == 4 ) {
        echo "Нету";
        break;
    }
}

