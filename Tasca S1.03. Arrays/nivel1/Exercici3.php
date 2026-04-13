<?php
$array = array("Elefante", "Rinoceronte", "Tigre", "Escorpion");

function evaluarLetra(array $array, string $letra, int $count = 0): bool
{
    $array = array_map(fn($p) => strtolower($p), $array);
    $letra = strtolower($letra);
    foreach ($array as $palabra) {
        $count += str_contains($palabra, $letra);
    }

    return $count === sizeof($array);
}

echo var_dump(evaluarLetra($array, "p"));
