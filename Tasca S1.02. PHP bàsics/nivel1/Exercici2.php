<?php
//Exercici 2
$string = "Hello, world!";
$string2 = "Aquest és el curs de PHP";


/* Funcion simplificada con funcio nativa
function minusculas($str)
{
    $lenght = strlen($str);
    $string = "";
    for ($i = 0; $i < $lenght; $i++) {
        $string = $string . strtolower($str[$i]);
    }
    return $string;
}*/

/* Funcion simplificada con funcion nativa
function inverso($str)
{
    $lenght = strlen($str);
    $string = "";
    for ($i = -1; $i > - ($lenght + 1); $i--) {
        $string = $string . $str[$i];
    }
    return $string;
}
*/

$stringMin = strtoupper($string);
$lenght = strlen($str);
$strinv = strrev($string);
//$stringInv = strrev($string);


echo "$string:\n";
echo "String minusculas: $stringMin\n";
echo "Longitud del string: $lenght\n";
echo "String Invertido: $strinv\n";
echo "$string. $string2";
