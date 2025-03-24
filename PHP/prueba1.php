<?php
$host = '192.168.97.237';                   // Dirección del servidor MySQL
$usuario = 'Root';                          // Nombre de usuario de la base de datos
$contraseña = 'Root';                       // Contraseña del usuario
$base_de_datos = 'prueba1';                 // Nombre de la base de datos/esquema
// Crear la conexión
$conn = new mysqli($host, $usuario, $contraseña, $base_de_datos);
// Comprobar la conexión
if ($conn->connect_error) {
 die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión correcta.";
?>