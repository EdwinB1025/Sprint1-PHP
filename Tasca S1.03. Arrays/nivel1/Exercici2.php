<?php
$array = array(
    0 => "PHP",
    1 => 'edwin',
    4 => 'barrera',
    "nota" => 5,
);

//Mostara la logitud del array
echo "Tamaño array:" . sizeof($array) . "\nn";
//Eliminando segundo elemento
unset($array[1]);
echo var_dump($array);

//Normalizando indices

$array = array_values($array);
echo  var_dump($array);
