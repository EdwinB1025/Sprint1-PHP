<?php
$invitadosPrincipal = array(
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
);

$otrosInvitados = array(
    "Pedro Fernández",
    "Miguel Morales",
    "Elena Ortega",
    "Javier Ruiz",
    "Carmen Jiménez",
    "Alberto Muñoz",
    "Natalia Álvarez",
    "Ricardo Romero",
    "Silvia Navarro",
    "Pablo Domínguez",
    "María López",
    "Marta Gil",
    "Alejandro Ramos",
    "Cristina Cruz",
    "Rodrigo Peña",
    "Daniela Flores",
    "Esteban Santos",
    "Verónica Guerrero",
    "Carlos García",
    "Tomás Vega",
    "Adriana Medina",
    "Gonzalo Soto",
    "Rebeca Campos",
    "Ignacio Aguilar",
    "Lorena Mendoza",
);

//La llista de convidats en comú entre les dues llistes
$invitadosComun = array_intersect($invitadosPrincipal, $otrosInvitados);
echo var_dump($invitadosComun);

//La mescla de la llista de convidats(sense repeticions).
$invitadosFinal = array_merge($invitadosPrincipal, $otrosInvitados);
$invitadosFinal = array_unique($invitadosFinal);
echo var_dump($invitadosFinal);

//La llista de convidats exclusius de la primera llista.
$invitadosPrimera = array_diff($invitadosPrincipal, $otrosInvitados);
echo var_dump($invitadosPrimera);

//La llista de convidats exclusius de la segona llista.
$invitadosSegunda = array_diff($otrosInvitados, $invitadosPrincipal);
echo var_dump($invitadosSegunda);
