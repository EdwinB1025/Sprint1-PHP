<?php
$numero = (int)readline("Cuantas palabras quieres analizar?");
for ($i = 0; $i < $numero; $i++) {
    $palabras[] = readline("Introduce una palabra: ");
}
$palabrasPar = array_filter($palabras, fn($p) => !(strlen($p) & 1));

echo "las palabras pares son\n" . var_dump($palabrasPar);
