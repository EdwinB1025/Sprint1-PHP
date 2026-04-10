<?php

function crearNumeros(int $n): array
{
    $numeros["numero"] = [];
    $numeros["tipo"] = [];
    for ($i = 0; $i <= $n - 2; $i++) {
        $numeros["numero"][$i] = $i + 2;
        $numeros["tipo"][$i] = "None";
    }
    return $numeros;
}

function buscarNumero(array $numeros, int $log = 0)
{
    $i = 0;
    do {
        $indice = $numeros["tipo"][$i] == "None" ? $i : NULL;
        if ($log == 1) {
            echo "buscarNumero (bucle): indice - " . "\n";
            echo var_dump($indice);
            echo "buscarNumero (bucle): posicion i - " . $i . "\n";
            echo "buscarNumero (bucle): indice_tipo - " . $numeros["tipo"][$i] . "\n";
            echo "buscarNumero (bucle): numero - " . $numeros["numero"][$i] . "\n";
        }
        $i++;
    } while ($indice === NULL && $i < sizeof($numeros["numero"]));

    return $indice;
}

function updateNone(int $indice, $numeros, int $log = 0): array
{
    $num = $numeros["numero"][$indice];
    $numeros["tipo"][$indice] = "Primo";
    if ($log == 1) {
        echo "updateNone: size numeros - " . sizeof($numeros["numero"]) . "\n";
        echo "updateNone: tipo indice_numero - " . $numeros["tipo"][$indice] . "\n";
    }
    for ($i = $indice + 1; $i < sizeof($numeros["numero"]); $i++) {
        if ($numeros["tipo"][$i] === "None") {
            $numeros["tipo"][$i] = ($numeros["numero"][$i] % $num) == 0 ? "Natural" : $numeros["tipo"][$i];
            if ($log == 1) {
                echo "updateNone (for):" . $numeros["tipo"][$i] . " - " . $numeros["numero"][$i] . "\n";
            }
        }
    }
    return $numeros;
}

function numerosPrimos(array $numeros, int $log = 0): array
{

    for ($i = 0; $i < sizeof($numeros["numero"]); $i++) {
        if ($numeros["tipo"][$i] === "Primo") {
            $numPrimos[] = $numeros["numero"][$i];
        }
    }
    if ($log == 1) {
        echo "numerosPrimos: " . "\n";
        echo var_dump($numPrimos);
    }
    return $numPrimos;
}

function eratostenes(int $n, int $log = 0): array
{
    $numeros = crearNumeros($n);
    if ($log == 1) {
        echo "Erastostenes: array numeros creado\n";
        echo var_dump($numeros) . "\n";
    }
    if (sizeof($numeros) > 1) {
        do {
            $indice = buscarNumero($numeros);
            if ($indice !== NULL) {
                $numeros = updateNone($indice, $numeros);
            } else {
                $numPrimos = numerosPrimos($numeros);
            }
        } while ($indice !== NULL);
    }
    return $numPrimos;
}


$n = (int)readline("hasta que numero quieres evaluar los numero primos\n");
$n = $n > 0 ? $n : 30;
$numeros = eratostenes($n);
for ($i = 0; $i < sizeof($numeros); $i++) {
    if ($i == sizeof($numeros) - 1) {
        echo $numeros[$i] . ".";
    } else {
        echo $numeros[$i] . ",";
    }
}
