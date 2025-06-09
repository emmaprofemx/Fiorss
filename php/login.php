<?php
session_start(); // Si quieres usar sesiones para mantener la sesión activa

require 'database.php';

$email = $_POST['email'] ?? '';
$password = $_POST['pass'] ?? '';
$error = null;

if ($email && $password) {
    $sql = "SELECT * FROM clientes WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    
    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();
            
            // Verificación simple (sin password hash)
            if ($usuario['pass'] === $password) {
                // Guardar en sesión (opcional)
                $_SESSION['usuario'] = $usuario;
                header("Location: mostrarClientes.php");
                exit();
            } else {
                $error = "Contraseña incorrecta.";
            }
        } else {
            $error = "No existe una cuenta con ese correo.";
        }
    } else {
        $error = "Error al ejecutar la consulta.";
}

    $stmt->close();
} else {
    $error = "Por favor, rellena todos los campos.";
}

$conn->close();

// Si hay error, redirigir o mostrar alerta (puedes mejorarlo con JS o feedback en la misma página de login)
if ($error) {
    echo "<script>alert('$error'); window.location.href='index.html';</script>";
    exit();
}
?>
