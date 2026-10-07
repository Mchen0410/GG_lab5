<?php
// Ejercicio 5: Clase Producto
class Producto {
    private $codigo;
    private $nombre;
    private $precio;
    private $cantidad;

    public function __construct($codigo, $nombre, $precio, $cantidad) {
        $this->codigo   = $codigo;
        $this->nombre   = $nombre;
        $this->precio   = $precio;
        $this->cantidad = $cantidad;
    }

    public function mostrarInformacion() {
        return "Código: {$this->codigo} | Producto: {$this->nombre} | Precio: $"
             . number_format($this->precio, 2) . " | Cantidad: {$this->cantidad}";
    }

    public function valorInventario() {
        return $this->precio * $this->cantidad;
    }

    public function hayExistencia() {
        return $this->cantidad > 0;
    }
}

$productos = [
    new Producto("P001", "Laptop", 650.00, 8),
    new Producto("P002", "Mouse", 15.50, 25),
    new Producto("P003", "Webcam", 55.75, 0),
    new Producto("P004", "Monitor", 185.00, 3),
];

$valorTotal = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Clases y objetos</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 30px; }
        .caja { background: #fff; max-width: 700px; margin: auto; padding: 20px; border-radius: 8px; box-shadow: 0 1px 4px #0003; }
        h1 { font-size: 22px; color: #1f3a5f; }
        .producto { border-bottom: 1px solid #ddd; padding: 10px 0; }
        .si { color: #27ae60; font-weight: bold; }
        .no { color: #c0392b; font-weight: bold; }
        .total { margin-top: 15px; padding: 12px; background: #eaf1fb; border: 2px solid #1f3a5f; border-radius: 6px; font-size: 18px; }
    </style>
</head>
<body>
<div class="caja">
    <h1>Gestión de productos</h1>

    <?php foreach ($productos as $producto): ?>
        <?php $valorTotal += $producto->valorInventario(); ?>
        <div class="producto">
            <?= $producto->mostrarInformacion() ?><br>
            Valor del inventario: $<?= number_format($producto->valorInventario(), 2) ?><br>
            Existencia:
            <?php if ($producto->hayExistencia()): ?>
                <span class="si">Disponible</span>
            <?php else: ?>
                <span class="no">Agotado</span>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <div class="total">
        Valor total del inventario: <strong>$<?= number_format($valorTotal, 2) ?></strong>
    </div>
</div>
</body>
</html>
