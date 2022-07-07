<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destino = "angelo2020molero@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destino ,$asunto, $carta);
header('Location:mensaje-de-envio.html');
?>