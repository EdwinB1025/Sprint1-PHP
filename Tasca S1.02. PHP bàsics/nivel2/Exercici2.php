<?php
function mitjana(array $array): float
{
    return array_sum($array) / sizeof($array);
}

function classificacio(float $mitjana): string
{
    $result = match (true) {
        $mitjana < 4000 => "Principant",
        $mitjana >= 4000  && $mitjana < 8000 => "Intermedi",
        $mitjana > 8000 => "Professional",
    };

    return $result;
}


$numeros = [];
for ($i = 0; $i < 3; $i++) {
    do {
        $pos = $i + 1;
        $numeros[$i] = readline("Introduce el puntaje n. $pos (0-9999)");
        $error = $numeros[$i] >= 0 && $numeros[$i] <= 9999 ? 0 : 1;
        if ($error == 1) {
            echo "Error: el puntaje no esta entre 0 y 9999!\n";
        }
    } while ($error == 1);
}

$suma = array_sum($numeros);
$mitjana = mitjana($numeros);
$classificacio = classificacio($mitjana);

echo "Primer Puntaje: $numeros[0]\n
Segundo Puntaje: $numeros[1]\n
Tercer Puntaje: $numeros[2]\n
Suma: $suma\n
Promedio: $mitjana\n
Classificacion: $classificacio\n";
