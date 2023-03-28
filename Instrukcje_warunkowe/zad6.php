<?php

$haslo = "1234qwerasdf";

$liczba_znakow = strlen($haslo);

if ($liczba_znakow < 5) {
    echo "bardzo slabe";
} elseif ($liczba_znakow >= 5 && $liczba_znakow <= 8) {
    echo "slabe";
} elseif ($liczba_znakow >= 9 && $liczba_znakow <= 11) {
    echo "silne";
} else {
    echo "bardzo silne";
}