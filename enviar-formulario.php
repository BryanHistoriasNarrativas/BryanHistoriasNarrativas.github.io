<?php
// Cambia esta variable a tu dirección de correo
$destinatario = "tucorreo@example.com";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$asunto = "Nuevo mensaje de contacto de $nombre";
$contenido = "Nombre: $nombre\nCorreo Electrónico: $email\nMensaje:\n$mensaje";
$encabezados = "From: $email";

if (mail($destinatario, $asunto, $contenido, $encabezados)) {
    echo "Gracias por tu mensaje, $nombre. Te responderemos pronto.";
} else {
    echo "Hubo un error al enviar el mensaje. Inténtalo de nuevo.";
}
?>
