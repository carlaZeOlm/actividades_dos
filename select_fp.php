<?php
// Ruta al archivo de texto con las opciones
$rutaArchivo = 'opciones.txt';

// Obtener el índice proporcionado por la solicitud Ajax
$indice = $_POST['indice'];

// Leer el contenido del archivo y obtener la opción correspondiente al índice
$opciones = file($rutaArchivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$opcion = isset($opciones[$indice]) ? $opciones[$indice] : '';

// Devolver la opción como JSON
echo json_encode(['opcion' => $opcion, 'indice' => $indice]);
?>


