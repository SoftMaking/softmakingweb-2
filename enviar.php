<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "israel.jasma@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:index.html');

?>