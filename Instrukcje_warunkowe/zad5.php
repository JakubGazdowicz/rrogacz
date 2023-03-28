<?php

$wiek = 18;

if ($wiek >= 0) {
    if ($wiek < 11) {
        echo "dziecko";
    } elseif ($wiek >= 11 && $wiek <= 17) {
        echo "nastolatek";
    } else {
        echo "dorosly";
    }
}
