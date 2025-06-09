<?php
session_start();
$carrito = $_SESSION['carrito'] ?? [];
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<div class="container mt-5">
  <h2 class="mb-4 text-center">🛒 Tu carrito</h2>

  <?php if (empty($carrito)): ?>
    <div class="alert alert-info text-center">No hay productos en el carrito.</div>
  <?php else: ?>
    <form method="post" action="actualizar_carrito.php">
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle text-center">
          <thead class="table-dark">
            <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Total</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php $total = 0; ?>
            <?php foreach ($carrito as $id => $item): 
              $subtotal = $item['precio'] * $item['cantidad'];
              $total += $subtotal;
            ?>
              <tr>
                <td><?= htmlspecialchars($item['nombre']) ?></td>
                <td>$<?= number_format($item['precio'], 2) ?></td>
                <td>
                  <input type="number" name="cantidades[<?= $id ?>]" value="<?= $item['cantidad'] ?>" min="1" class="form-control text-center" style="width: 80px; margin: auto;">
                </td>
                <td>$<?= number_format($subtotal, 2) ?></td>
                <td>
                  <a href="eliminar_producto.php?id=<?= $id ?>" class="btn btn-sm btn-outline-danger" title="Eliminar">
                    ✖
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
            <tr class="table-light">
              <td colspan="3" class="text-end fw-bold">Total:</td>
              <td class="fw-bold">$<?= number_format($total, 2) ?></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="d-flex justify-content-between mt-3">
        <button type="submit" class="btn btn-primary">Actualizar cantidades</button>
        <a href="realizar_pedido.php" class="btn btn-success">Realizar pedido</a>
      </div>
    </form>
  <?php endif; ?>
</div>
