<?php
// Conexión a la base de datos
require 'database.php'; 

header('Content-Type: application/json');

$response = ['success' => false, 'message' => 'Hubo un error inesperado.'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre   = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $correo   = isset($_POST['correo']) ? trim($_POST['correo']) : '';
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $mensaje  = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

    // Validaciones básicas
    if ($nombre === '' || $correo === '' || $telefono === '') {
        $response['message'] = 'Nombre, correo y teléfono son obligatorios.';
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'El formato del correo no es válido.';
    } else {
        try {
            $sql = "INSERT INTO informacioncontacto (nombre, correo, telefono, mensaje) VALUES (?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("ssss", $nombre, $correo, $telefono, $mensaje);
            $stmt->execute();
            $stmt->close();

            $response['success'] = true;
            $response['message'] = 'Mensaje enviado correctamente. ¡Gracias por contactarnos!';
        } catch (mysqli_sql_exception $e) {
            $response['message'] = 'Error al guardar el mensaje: ' . $e->getMessage();
        }
    }
} else {
    $response['message'] = 'Método no permitido.';
}

// Cierra la conexión
if (isset($conexion)) {
    $conexion->close();
}

// Devuelve la respuesta en formato JSON
echo json_encode($response);
?>
