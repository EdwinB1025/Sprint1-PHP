<?php
function nota(): float
{
    $nota = mt_rand(0, 100) / 10;
    return $nota;
}
function nombre(array $array): string
{
    $indice = mt_rand(0, sizeof($array) - 1);
    $nombre = $array[$indice];
    unset($array[$indice]);
    return $nombre;
}

function crearClase(int $n, $alumnos): array
{
    for ($i = 0; $i < $n; $i++) {
        $class[$i] = array(
            "nombre" => nombre($alumnos),
            0 => nota(),
            1 => nota(),
            2 => nota(),
            3 => nota(),
            4 => nota(),
        );
    }

    return $class;
}

function crearPromedios(array $array): array
{
    foreach ($array as $alumno) {
        $nombre = $alumno['nombre'];
        $notas = array_slice($alumno, 1, 5);
        $promedio[$nombre] = (float) array_sum($notas) / 5;
    }

    return $promedio;
}

function promedioClase(array $clase): float
{
    $promedio = array_sum($clase) / sizeof($clase);
    return $promedio;
}

$alumnos = array(
    "Carlos García",
    "María López",
    "Pedro Fernández",
    "Lucía Torres",
    "Andrés Ramírez",
    "Sofia Vargas",
    "Miguel Morales",
    "Elena Ortega",
    "Roberto Castillo",
    "Patricia Núñez",
    "Fernando Reyes",
    "Isabel Delgado",
    "Diego Ibáñez",
    "Laura Molina",
    "Marcos Serrano",
    "Valentina Prieto",
    "Hugo Blanco",
    "Beatriz Herrero",
    "Javier Ruiz",
    "Carmen Jiménez",
    "Alberto Muñoz",
    "Natalia Álvarez",
    "Ricardo Romero",
    "Silvia Navarro",
    "Pablo Domínguez",
    "Marta Gil",
    "Alejandro Ramos",
    "Cristina Cruz",
    "Rodrigo Peña",
    "Daniela Flores",
    "Esteban Santos",
    "Verónica Guerrero",
    "Tomás Vega",
    "Adriana Medina",
    "Gonzalo Soto",
    "Rebeca Campos",
    "Ignacio Aguilar",
    "Lorena Mendoza",
    "Emilio Cabrera",
    "Nuria Herrera",
    "Raúl Jiménez",
    "Mónica Guerrero",
    "Víctor Pascual",
    "Alicia Bravo",
    "Sergio Cano",
    "Eva Giménez",
    "Iván Pardo",
    "Rosa Gallego",
    "Óscar Pereira",
    "Irene Fuentes",
    "Álvaro Marín",
    "Pilar Rubio",
    "Enrique Soler",
    "Amparo Crespo",
    "Rubén Vidal",
    "Susana Moral",
    "Jaime Llorente",
    "Consuelo Aranda",
    "Borja Espinosa",
    "Miriam Carrasco",
    "Félix Montoya",
    "Olga Bermejo",
    "Héctor Nieto",
    "Ainhoa Zarate",
    "Julián Pacheco",
    "Rocío Benito",
    "Germán Moya",
    "Esperanza Leal",
    "Nicolás Cabello",
    "Tamara Ponce",
    "Mateo Izquierdo",
    "Yolanda Merino",
    "Ernesto Velasco",
    "Claudia Aparicio",
    "Salvador Villanueva",
    "Inmaculada Rojas",
    "Aurelio Montero",
    "Esther Bernal",
    "Guillermo Acosta",
    "Paloma Hidalgo",
    "Leandro Cuesta",
    "Dolores Rivero",
    "Cayetano Montes",
    "Lourdes Pedraza",
    "Arturo Salas",
    "Magdalena Ferrer",
    "Dionisio Carrillo",
    "Encarnación Polo",
    "Celestino Vera",
    "Remedios Santana",
    "Baldomero Arias",
    "Concepción Ibarra",
    "Wenceslao Prieto",
    "Asunción Delgado",
    "Epifanio Lozano",
    "Visitación Mora",
    "Segismundo Fuente",
    "Purificación Vega",
    "Atanasio Blanco",
    "Clementina Rojo",
);

$numAlumnos = readline("Cuntos alumnos componen tu clase?");
$clase = crearClase($numAlumnos, $alumnos);
$clasePromedios = crearPromedios($clase);

foreach ($clase as $alumno) {
    echo $alumno["nombre"] . "tiene las siguientes notas:\n";
    for ($i = 0; $i < 4; $i++) {
        echo $alumno[$i] . "\n";
    }
    echo "El promedio del alumno es :" . $clasePromedios[$alumno["nombre"]] . "\n--------------------------------------------\n";
}

echo "El promedio general de la clase es: " . promedioClase($clasePromedios);
