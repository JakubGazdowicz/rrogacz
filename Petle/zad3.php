<?php

for ($i = 1; $i <= 100; $i += 2) {
    echo $i . "\n";
}

for ($i = 100; $i >= 1; $i -= 4) {
    echo $i . "\n";
}

$i = 1;

while ($i <= 100) {
    echo $i . "\n";
    $i += 2;
}

while ($i >= 1) {
    echo $i . "\n";
    $i -= 4;
}

$i = 0;

do {
    echo $i . "\n";
    $i += 2;
} while ($i <= 100);


do {
    echo $i . "\n";
    $i -= 4;
} while ($i >= 1);
