<?php
$destino="asieririarte13@gmail.com";
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];
$contenido="nombre: ".$nombre . "\ncorreo: " . $correo . "\nteléfono: " . $teléfono. "\nmensaje: " . $mensaje;
mail($destino, "contacto", $contenido);
header("Location:Gracias.html");
?>