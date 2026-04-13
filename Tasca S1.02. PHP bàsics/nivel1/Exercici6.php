<?php
function isBitten(): bool
{
    $bitten = ((float)mt_rand(0, 100)) / 100;
    return ($bitten > 0.5);
}

do {
    $bitten = isBitten();
    echo "\nDani" . ($bitten ? " " : " NO ") . "te ha mordido el dedo!\n";
    $option = readline("Deseas continuar? (si/no)");
} while ($option == "si");
