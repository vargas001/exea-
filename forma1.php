<?php
$destino= "jvargas@exea.mx";
$nombre= $_POST ["nombre"];
$correo= $_POST ["correo"];
$asunto= $_POST ["asunto"];
$telefono= $_POST ["telefono"];
$mensaje= $_POST ["mensaje"];

$contenido= "Nombre: " . $nombre . "\nCorreo: "  . $correo . "\nAsunto: " . $asunto . "\nTelefono: " . $Telefono ."\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location:index.html");
?>