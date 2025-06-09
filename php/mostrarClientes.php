<?php

require 'database.php';

$clientes = [];
$error = null;

try {
    $sql = "SELECT id_cliente, nombre, apellidoP, apellidoM, email, estado FROM clientes";

    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $clientes[] = $fila;
        }
    }

} catch (mysqli_sql_exception $e) {
    $error = "Error al consultar los datos: " . $e->getMessage();
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            padding-top: 3rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="mb-4 text-center">Listado de Clientes</h1>

        <?php

        if ($error): ?>
            <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php
        elseif (empty($clientes)): ?>
            <div class="alert alert-info" role="alert">
                No hay clientes registrados en la base de datos.
            </div>
        <?php
        else: ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Email</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // 5. Recorremos el arreglo de clientes y creamos una fila <tr> por cada uno.
                        foreach ($clientes as $cliente): ?>
                            <tr>
                                <td><?= htmlspecialchars($cliente['id_cliente']) ?></td>
                                
                                <td><?= htmlspecialchars($cliente['nombre'] . ' ' . $cliente['apellidoP'] . ' ' . $cliente['apellidoM']) ?></td>
                                
                                <td><?= htmlspecialchars($cliente['email']) ?></td>
                                
                                <td><?= htmlspecialchars($cliente['estado']) ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
        
    </div>

</body>
</html>