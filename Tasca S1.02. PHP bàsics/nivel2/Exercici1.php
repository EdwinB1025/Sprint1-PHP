<?php

function costo($segons)
{
    if ((int)($segons / 60) < 3) {
        $costo = 10.0;
    } else {
        $costo = 10.0 + ($segons - 180) * (5.0 / 60);
    }
    return (float)$costo;
}

do {
    $segons = (int)readline("Cuantos segundos a durado la llamada?");
    $costo = $segons != 0 ? costo($segons) : 0;
    printf("\nEl costo de la llamada es: %.2f centesimos.\n", $costo);
    $option = readline("Deseas calcular el costo de otra llamada? (si/no)");
} while ($option == "si");
