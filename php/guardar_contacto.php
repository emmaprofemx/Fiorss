<?php
// Conexión a la base de datos
require 'database.php'; // Asegúrate de que este archivo tenga la variable $conexion

header('Content-Type: application/json');

$response = ['success' => false, 'message' => 'Hubo un error inesperado.'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura los datos, aunque estén vacíos
    $nombre   = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $correo   = isset($_POST['correo']) ? trim($_POST['correo']) : '';
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $mensaje  = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

    try {
        $sql = "INSERT INTO informacioncontacto (nombre, correo, telefono, mensaje) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $correo, $telefono, $mensaje);
        $stmt->execute();
        $stmt->close();

        $response['success'] = true;
        $response['message'] = 'Mensaje guardado correctamente.';
    } catch (mysqli_sql_exception $e) {
        $response['message'] = 'Error al guardar el mensaje: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'Método no permitido.';
}

if (isset($conexion)) {
    $conexion->close();
}

echo json_encode($response);
?>
