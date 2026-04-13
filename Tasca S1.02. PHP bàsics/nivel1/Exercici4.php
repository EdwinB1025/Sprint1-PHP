<?php
$fin = $argv[1] ?? 50;
$increment = $argv[2] ?? 1;

function contar(int $fin, int $increment, $contador = 0)
{
    while ($contador < $fin) {
        $contador += $increment;
        if ($contador <= $fin) {
            echo "$contador\n";
        }
    }
}

echo contar($fin, $increment, $contador);
