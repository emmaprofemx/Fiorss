<?php
require 'database.php'; // Tu archivo de conexión ya modificado

header('Content-Type: application/json');
$response = ['success' => false, 'message' => 'Hubo un error desconocido.'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST['nombreCliente']);
    $apellidoP = trim($_POST['apellidoPCliente']);
    $apellidoM = trim($_POST['apellidoMCliente']);
    $email = trim($_POST['emailCliente']);
    $password_recibido = trim($_POST['passwordCliente']);
    $estado = trim($_POST['estado']);

    if (empty($nombre) || empty($apellidoP) || empty($apellidoM) || empty($email) || empty($password_recibido) || empty($estado)) {
        $response['message'] = 'Todos los campos son obligatorios.';
    } else {
        // Inicia el bloque try. El código intentará ejecutar todo lo que está aquí.
        try {
            // Encriptamos la contraseña
            $password_hash = password_hash($password_recibido, PASSWORD_DEFAULT);

            // Preparamos la consulta SQL
            $sql = "INSERT INTO clientes (nombre, apellidoP, apellidoM, email, password, estado) VALUES (?, ?, ?, ?, ?, ?)";
            
            $stmt = $conexion->prepare($sql);
            
            // Ligamos los parámetros
            $stmt->bind_param("ssssss", $nombre, $apellidoP, $apellidoM, $email, $password_hash, $estado);

            // Ejecutamos la consulta
            $stmt->execute();

            // Si todo lo anterior funcionó sin lanzar una excepción, el registro fue exitoso
            $response['success'] = true;
            $response['message'] = '¡Registro exitoso!';
            
            $stmt->close();

        } catch (mysqli_sql_exception $e) {
            // Inicia el bloque catch. Si ocurre CUALQUIER error de base de datos en el bloque 'try',
            // el código saltará directamente aquí.
            
            // La variable $e contiene toda la información del error.
            // $e->getCode() nos da el número del error.
            // $e->getMessage() nos da el mensaje descriptivo del error.

            if ($e->getCode() == 1062) {
                // Código 1062: Error de entrada duplicada (en nuestro caso, el email)
                $response['message'] = 'El correo electrónico ya está registrado.';
            } else {
                // Para cualquier otro error, mostramos un mensaje genérico y el detalle técnico.
                // En un entorno de producción real, podrías registrar $e->getMessage() en un archivo de log
                // en lugar de mostrarlo al usuario.
                $response['message'] = 'Error de base de datos. Por favor, intente más tarde.';
                // Para depuración, podemos añadir el mensaje técnico a la respuesta:
                $response['error_detail'] = $e->getMessage();
            }
        }
    }
} else {
    $response['message'] = 'Método de solicitud no válido.';
}

// Cerramos la conexión fuera del try...catch si es que se abrió
if (isset($conexion)) {
    $conexion->close();
}

// Devolvemos la respuesta
echo json_encode($response);
?>