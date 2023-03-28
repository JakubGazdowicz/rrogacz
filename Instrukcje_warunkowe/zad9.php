<?php

$liczba1 = (int)readline('Podaj liczbe 1: ');
$liczba2 = (int)readline('Podaj liczbe 2: ');
$liczba3 = (int)readline('Podaj liczbe 3: ');

if ($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3) {
    echo "powtarza sie";
}