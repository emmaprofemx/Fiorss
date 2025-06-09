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
         $productos = [
  1 => ['nombre' => 'Arreglo Floral Aniversario', 'precio_original' => 120.00, 'precio' => 99.00, 'imagen' => '../images/producto1.webp'],
  2 => ['nombre' => 'Astromelias Rosadas', 'precio' => 80.00, 'imagen' => '../images/producto2.webp'],
  3 => ['nombre' => 'Flores Primavera', 'precio' => 80.00, 'imagen' => '../images/producto3.webp'],
  4 => ['nombre' => 'Ramo Especial', 'precio_original' => 120.00, 'precio' => 99.00, 'imagen' => '../images/producto4.webp']
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

    $_SESSION['producto_agregado'] = true;
    header("Location: productos.php");
}
?>
