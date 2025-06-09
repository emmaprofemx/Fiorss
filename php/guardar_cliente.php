<?php
require 'database.php'; // Este archivo ahora solo contiene la conexión

header('Content-Type: application/json');

$response = ['success' => false, 'message' => 'Hubo un error al procesar la solicitud.'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura y limpia los datos recibidos
    $nombre = trim($_POST['nombreCliente'] ?? '');
    $apellidoP = trim($_POST['apellidoPCliente'] ?? '');
    $apellidoM = trim($_POST['apellidoMCliente'] ?? '');
    $email = trim($_POST['emailCliente'] ?? '');
    $password_recibido = trim($_POST['passwordCliente'] ?? '');
    $estado = trim($_POST['estado'] ?? '');

    // Validación básica
    if (empty($nombre) || empty($apellidoP) || empty($email) || empty($password_recibido)) {
        $response['message'] = 'Faltan datos obligatorios.';
    } else {
        try {
            $sql = "INSERT INTO clientes (nombre, apellidoP, apellidoM, email, password, estado) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);

            if ($stmt) {
                $password_hash = password_hash($password_recibido, PASSWORD_DEFAULT);
                $stmt->bind_param("ssssss", $nombre, $apellidoP, $apellidoM, $email, $password_hash, $estado);

                if ($stmt->execute()) {
                    $response['success'] = true;
                    $response['message'] = 'Cliente registrado exitosamente.';
                } else {
                    $response['message'] = 'Error al ejecutar la consulta: ' . $stmt->error;
                }

                $stmt->close();
            } else {
                $response['message'] = 'Error al preparar la consulta: ' . $conexion->error;
            }
        } catch (Exception $e) {
            $response['message'] = 'Excepción: ' . $e->getMessage();
        }
    }
} else {
    $response['message'] = 'Método no permitido.';
}

if (isset($conexion)) {
    $conexion->close();
}

echo json_encode($response);
?>
