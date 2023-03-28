<?php

$table = '<table>';
for ($i = 0; $i < 2; $i++) {
    $table .= '<tr>';
    for ($j = 0; $j < 10; $j++) {
        $table .= '<td></td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';