<?php
function bd(){
// Datos para acceder a MySQL
$conn = mysqli_connect('localhost', 'root', '',"emprendimiento");

//Muestra error si no son las credenciales correctas
if (!$conn) {
die('ERROR: No se pudo conectar con el servidor: ' . mysqli_error());
}
return $conn;
}
