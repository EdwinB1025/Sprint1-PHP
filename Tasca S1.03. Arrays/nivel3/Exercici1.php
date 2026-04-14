<?php
$numeros = array(2, 5, 7, 3, 9, 16, 11, 8, 22);
$numerosCubo = array_map(fn($n): float => $n ** 3, $numeros);

foreach ($numeros as $i => $numero) {
    echo "El numero $numero al cubo es igual a {$numerosCubo[$i]}.\n";
}
