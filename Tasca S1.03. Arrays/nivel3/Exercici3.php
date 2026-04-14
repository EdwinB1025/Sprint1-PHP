<?php
function esPrimo(int $num): bool
{
    if ($num >= 2) {
        $cuenta = 0;
        for ($i = 2; $i <= $num; $i++) {
            $cuenta = ($num % $i === 0) ? ++$cuenta : $cuenta;
        }
        $result = $cuenta === 1;
    } else {
        $result = true;
    }
    echo "numero: $num - ";
    echo  var_dump($result);
    return $result;
}

function sumaPrimos($suma, $elemento): int
{
    $suma += esPrimo($elemento) ? $elemento : 0;
    return $suma;
}

$numeros = array(1, 2, 3, 4, 5, 6, 13, 21, 27, 30);

$numeroReduce = array_reduce($numeros, "sumaPrimos", 0);

echo $numeroReduce;
