<?php
// Configura el archivo donde se almacenarán las reseñas
$archivo = 'reseñas.txt';

// Obtiene los datos enviados por el formulario
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];
$fecha = date("Y-m-d H:i:s");

// Crea la reseña en formato JSON
$reseña = [
    'nombre' => $nombre,
    'comentario' => $comentario,
    'fecha' => $fecha,
];

// Guarda la reseña en el archivo
$reseña_json = json_encode($reseña) . "\n";
file_put_contents($archivo, $reseña_json, FILE_APPEND);

// Confirma que la reseña se ha guardado correctamente
echo 'Reseña guardada correctamente';
?>
