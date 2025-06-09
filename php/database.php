<?php

$db_host = '127.0.0.1';
$db_port = 3307;
$db_username = 'root';  
$db_password = '';
$db_name = 'fior_trn';

try {
    // Crear conexión global
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);

    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nombre = trim($_POST['nombreCliente'] ?? '');
        $apellidoP = trim($_POST['apellidoPCliente'] ?? '');
        $apellidoM = trim($_POST['apellidoMCliente'] ?? '');
        $email = trim($_POST['emailCliente'] ?? '');
        $password_recibido = trim($_POST['passwordCliente'] ?? '');
        $estado = trim($_POST['estado'] ?? '');

        // Validación rápida
        if (empty($nombre) || empty($apellidoP) || empty($email) || empty($password_recibido)) {
            throw new Exception("Faltan datos obligatorios.");
        }

        $sql = "INSERT INTO clientes (nombre, apellidoP, apellidoM, email, password, estado) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $password_hash = password_hash($password_recibido, PASSWORD_DEFAULT);
            $stmt->bind_param("ssssss", $nombre, $apellidoP, $apellidoM, $email, $password_hash, $estado);

            if (!$stmt->execute()) {
                throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
            }

            $stmt->close();
        } else {
            throw new Exception("Error al preparar la consulta: " . $conn->error);
        }
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
