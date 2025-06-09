<?php
// Solo conexión, sin lógica adicional
$db_host = '127.0.0.1';
$db_port = 3307;
$db_username = 'root';
$db_password = '';
$db_name = 'fior_trn';

$conexion = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
