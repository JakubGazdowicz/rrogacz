<?php

for ($i = 1; $i < 9; $i++) {
    for ($j = 1; $j < 9; $j++) {
        if (($i + $j) % 2 == 0) {
            echo " X ";
        } else {
            echo " O ";
        }
    }
    echo "\n";
}