<?php
session_start();
$id = $_GET['id'] ?? null;

if ($id) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    if (isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id]['cantidad'] += 1;
    } else {
        // Productos "quemados" en el código
        $productos = [
            1 => ['nombre' => 'Nombre del Producto', 'precio' => 99.00, 'imagen' => 'images/producto1.webp'],
            2 => ['nombre' => 'Producto sin descuento', 'precio' => 80.00, 'imagen' => 'images/producto2.webp'],
            3 => ['nombre' => 'Producto sin descuento', 'precio' => 80.00, 'imagen' => 'images/producto3.webp'],
            4 => ['nombre' => 'Nombre del Producto', 'precio' => 99.00, 'imagen' => 'images/producto4.webp'],
        ];

        if (isset($productos[$id])) {
            $_SESSION['carrito'][$id] = [
                'nombre' => $productos[$id]['nombre'],
                'precio' => $productos[$id]['precio'],
                'imagen' => $productos[$id]['imagen'],
                'cantidad' => 1
            ];
        }
    }

    header("Location: productos.php?agregado=1");
    exit;
}
?>
