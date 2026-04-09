<?php
$fin = $argv[1] ?? 50;
$increment = $argv[2] ?? 1;
$contador = 0;

function contar($fin, $increment, $contador)
{
    while ($contador < $fin) {
        $contador += $increment;
        if ($contador <= $fin) {
            echo "$contador\n";
        }
    }
}

echo contar($fin, $increment, $contador);
