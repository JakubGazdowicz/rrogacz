<?php

for ($i = 1; $i <= 9; $i++) {
    if ($i == 4) {
        continue;
    } else if($i == 9) {
        echo $i;
    } else {
        echo $i . "-";
    }
}