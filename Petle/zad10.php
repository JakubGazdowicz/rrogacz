<?php

$liczba = (int)readline();

$czy_pierwsza = 0;

for ($i = 1; $i <= $liczba; $i++) {
    if ($liczba % $i == 0) {
        $czy_pierwsza += 1;
    }
}

if ($czy_pierwsza <= 2) {
    echo "liczba pierwsza";
} else {
    echo "nie liczba pierwsza";
}