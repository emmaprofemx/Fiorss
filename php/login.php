<?php
session_start(); // Para sesiones

require 'database.php'; // Este archivo define $conexion

$email = $_POST['email'] ?? '';
$password = $_POST['pass'] ?? '';
$error = null;

if ($email && $password) {
    $sql = "SELECT * FROM clientes WHERE email = ?";
    $stmt = $conexion->prepare($sql); // Usamos $conexion como en database.php
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();
            if ($usuario['password'] === $password) {
                $_SESSION['usuario'] = $usuario;
                header("Location: ../php/index.php");
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

$conexion->close();

if ($error) {
    echo "<script>alert('$error'); window.location.href='index.html';</script>";
    exit();
}
?>
