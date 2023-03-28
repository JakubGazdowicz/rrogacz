<?php

$tab = [7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4];

for ($i = 0; $i < 16; $i++) {
    echo $tab[$i] . " ";
}

echo "\n";

foreach ($tab as $item) {
    echo $item . " ";
}

echo "\n";

echo  "min: " . min($tab) . "\n";

echo "max: " . max($tab) . "\n";

$srednia = 0;
$suma = 0;

for ($i = 0; $i < 16; $i++) {
    $suma += $tab[$i];
}

$srednia = $suma / count($tab);

echo "srednia arytmetyczna: " . $srednia;

$suma = 0;

foreach ($tab as $value) {
    if ($value == 3) {
        $suma++;
    }
}

echo "\nIlosc trojek: " . $suma;

$parzyste = 0;
$nieparzyste = 0;
$suma_parzyste = 0;
$suma_nieparzyste = 0;
foreach ($tab as $value) {
    if ($value % 2 == 0) {
        $parzyste++;

        $suma_parzyste += $value;
    } else {
        $nieparzyste++;

        $suma_nieparzyste += $value;
    }
}

echo "\nParzyste: " . $parzyste;
echo "\nNieparzyste: " . $nieparzyste;
echo "\nSuma liczb parzystych: " . $suma_parzyste;
echo "\nSuma liczb nieparzystych: " . $suma_nieparzyste;
