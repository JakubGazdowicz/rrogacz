<?php

function suma($a, $b) {
    return $a + $b;
}

function suma_liczb($n) {
    $suma = 0;
    for ($i = 1; $i <= $n; $i++) {
        $suma += $i;
    }

    return $suma;
}

function silnia($n) {
    $silnia = 1;

    for ($i = 1; $i <= $n; $i++) {
        $silnia *= $i;
    }

    return $silnia;
}

function trojakt($a, $b, $c) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        return true;
    } else {
        return false;
    }
}

function gra($gracz1, $gracz2) {
    if ($gracz1 == $gracz2) {
        return "remis";
    } elseif ($gracz1 == "kamien" && $gracz2 == "papier" || $gracz1 == "papier" && $gracz2 == "nozyce" || $gracz1 == "nozyce" && $gracz2 == "kamien") {
        return "gracz2";
    } else {
        return "gracz1";
    }
}

function bmi($masa, $wzrost) {
    $bmi = $masa / ($wzrost * $wzrost);

    switch ($bmi) {
        case $bmi < 16:
            return "wyglodzenie";
            break;
        case $bmi >= 16.0 && $bmi < 17.0:
            return "wychudzenie";
            break;
        case $bmi >= 17.0 && $bmi <= 18.49:
            return "niedowaga";
            break;
        case $bmi >= 18.5 && $bmi <= 24.99:
            return "pozadana masa ciala";
            break;
        case $bmi >= 25.0 && $bmi <= 29.99:
            return "nadwaga";
            break;
        case $bmi >= 30.0 && $bmi <= 34.99:
            return "otylosc I stopnia";
            break;
        case $bmi >= 35.0 && $bmi <= 39.99:
            return "otylosc II stopnia";
            break;
        case $bmi >= 40.0:
            return "otylosc III stopnia";
            break;
        default:
            return 0;
    }
}

echo bmi(92, 1.80);