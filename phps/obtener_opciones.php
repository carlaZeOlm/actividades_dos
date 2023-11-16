<?php

// Simulando la obtención de opciones desde una base de datos o alguna otra fuente de datos
$opciones = array(
    array('value' => 1, 'label' => 'Manzana'),
    array('value' => 2, 'label' => 'Piña'),
    array('value' => 3, 'label' => 'Limón'),
    array('value' => 4, 'label' => 'Naranja')
);

// Devolver las opciones como JSON
echo json_encode($opciones);

?>

