<?php

for ($i = 0; $i < 5; $i++) {
    echo " * ";

    for ($j = 1; $j < 4; $j++) {
        if ($i == 0 || $i == 4) {
            echo " * ";
        } else {
            echo " . ";
        }
    }

    echo " * \n";
}