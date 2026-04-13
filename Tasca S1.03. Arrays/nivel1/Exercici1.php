<?php
for ($i = 0; $i < 5; $i++) {
    $enteros[] = (int) readline("Introduce un numero entero: ");
}

foreach ($enteros as $num) {
    echo "$num\n";
}
