<?php
// Punto a
$X = 5;
$Y = 2;
$N = 4.3;
$M = 8.45;

function operarNumero(float $num1, float $num2): string
{

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multi = $num1 * $num2;
    $div = $num1 / $num2;
    $mod = fmod($num1, $num2);

    $result = "El primer numero es: $num1, y el segundo numero es: $num2 \n
    Suma: $suma\n
    Resta: $resta\n
    Multiplicación: $multi\n
    Division: $div\n
    Modulo: $mod\n\n";

    return $result;
}

function operarSerie(float $num1, float $num2, float $num3, float $num4): string
{
    $numeros = array($num1, $num2, $num3, $num4);
    $numerosDoble = array_map(fn($v) => $v * 2, $numeros);
    $numerosSuma = array_sum($numeros);
    $numerosProduct = array_product($numeros);
    $result = "El doble de cada variable es: ";

    for ($i = 0; $i < sizeof($numerosDoble); $i++) {
        $punt = $i == (sizeof($numerosDoble) - 1) ? "." : ", ";
        $result .= $numerosDoble[$i] . $punt;
    }

    $result .= "\n\n    Suma: $numerosSuma\n\n    Producto: $numerosProduct\n\n";

    return $result;
}

// Punto b: para este ejercicio introducir argumentos dentro del comando para ejecutar el scprit. E.g. php Exercici3.php 1 2 +

function calcular(float $num1, float $num2, string $operacion): string
{
    $result = "El primer numero es: $num1, y el segundo numero es: $num2 \n";

    switch ($operacion) {
        case "+":
            $resultado = $num1 + $num2;
            $result .= "\n El resultado de la suma es: $resultado";
            break;
        case "-":
            $resultado = $num1 - $num2;
            $result .= "\n El resultado de la resta es: $resultado";
            break;
        case "/":
            if ($num2 == 0) {
                $resultado = "Error no se puede dividir por 0";

                $result .= "\n$resultado";
            } else {
                $resultado = $num1 / $num2;
                $result .= "\n El resultado de la division es: $resultado";
            }
            break;
        case "*":
            $resultado = $num1 * $num2;
            $result .= "\n El resultado de la multiplicacion es: $resultado";
            break;
        case "%":
            $resultado = fmod($num1, $num2);
            $result .= "\n El resultado del modulo es: $resultado";
    }

    return $result;
}

// resultado a
echo operarNumero($X, $Y);
echo operarNumero($N, $M);
echo operarSerie($X, $Y, $N, $M);

// resultado b
echo calcular($argv[1], $argv[2], $argv[3]);
