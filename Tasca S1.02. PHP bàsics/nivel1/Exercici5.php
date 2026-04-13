<?php

function garuAlumne(int $nota): string
{
    if ($nota >= 60) {
        $grau = "Primera Divisió";
    } elseif ($nota >= 45) {
        $grau = "Segona Divisió";
    } elseif ($nota >= 33) {
        $grau = "Tercera Divisió";
    } else {
        $grau = "Reprova, Mateixa Divisió";
    }
    return $grau . "\n";
}

do {
    $nota = readline("Introduce la nota o pulsa 's' para salir: \n");
    if (0 <= $nota && $nota <= 100) {
        $grau = garuAlumne($nota);
        $result = "El grau de l' estudiant és: $grau";
    } else {
        $result = $nota != "s" ? "El valor de la nota es incorrecto introducelo de nuevo" : "";
    }

    echo "$result\n";
} while ($nota != "s");
