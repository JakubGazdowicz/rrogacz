<?php

$n = (int)readline();

$l = $n % 3;

if ($l == 1) {
    $l += 2;

    for ($i = $n; $i <= $n + 60; $i++) {
        if ($i % 3 == 0) {
            echo "$i" . "\n";
        }
    }
} elseif ($l == 2) {
    $l += 1;

    for ($i = $n; $i <= $n + 60; $i++) {
        if ($i % 3 == 0) {
            echo "$i" . "\n";
        }
    }
} else {
    for ($i = $n; $i <= $n + 60; $i++) {
        if ($i % 3 == 0) {
            echo "$i" . "\n";
        }
    }
}