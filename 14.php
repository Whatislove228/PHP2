<?php

$arr = [1,4, 2, 5, 19, 13, 0, 10];
// Используем do-while для остановки выполнения хода программы (http://php.net/manual/ru/control-structures.do.while.php)
do {
    foreach ($arr as $item) {
        if ($item == 2 || $item == 3 || $item == 4) {
            echo 'Есть!';
            break 2;
        }
    }
    echo 'Нет!';
} while (0);

