<?php
// Ejercicio 3: Catálogo de productos con arreglos y funciones
$productos = [
    ["nombre" => "Laptop",   "precio" => 650.00, "cantidad" => 8],
    ["nombre" => "Mouse",    "precio" => 15.50,  "cantidad" => 25],
    ["nombre" => "Teclado",  "precio" => 25.00,  "cantidad" => 4],
    ["nombre" => "Monitor",  "precio" => 185.00, "cantidad" => 3],
    ["nombre" => "Audífonos","precio" => 40.00,  "cantidad" => 12],
    ["nombre" => "Webcam",   "precio" => 55.75,  "cantidad" => 0],
];

// Valor del inventario de un solo producto
function valorInventario($producto) {
    return $producto["precio"] * $producto["cantidad"];
}

// Valor total del inventario
function valorTotalInventario($productos) {
    $total = 0;
    foreach ($productos as $producto) {
        $total += valorInventario($producto);
    }
    return $total;
}

// Cantidad de productos con existencia menor a 5
function contarBajoStock($productos) {
    $contador = 0;
    foreach ($productos as $producto) {
        if ($producto["cantidad"] < 5) {
            $contador++;
        }
    }
    return $contador;
}

// Muestra la tabla HTML con todos los productos
function mostrarProductos($productos) {
    echo "<table>";
    echo "<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Valor inventario</th></tr>";
    foreach ($productos as $producto) {
        echo "<tr>";
        echo "<td>" . $producto["nombre"] . "</td>";
        echo "<td>$" . number_format($producto["precio"], 2) . "</td>";
        echo "<td>" . $producto["cantidad"] . "</td>";
        echo "<td>$" . number_format(valorInventario($producto), 2) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Catálogo</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 30px; }
        .caja { background: #fff; max-width: 650px; margin: auto; padding: 20px; border-radius: 8px; box-shadow: 0 1px 4px #0003; }
        h1 { font-size: 22px; color: #1f3a5f; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #1f3a5f; color: #fff; }
        .resumen { margin-top: 20px; padding: 15px; border: 2px solid #1f3a5f; border-radius: 6px; background: #eaf1fb; }
    </style>
</head>
<body>
<div class="caja">
    <h1>Catálogo de productos</h1>
    <?php mostrarProductos($productos); ?>

    <div class="resumen">
        <h3>Resumen del inventario</h3>
        <p>Total de productos: <strong><?= count($productos) ?></strong></p>
        <p>Valor total del inventario: <strong>$<?= number_format(valorTotalInventario($productos), 2) ?></strong></p>
        <p>Productos con existencia inferior a 5: <strong><?= contarBajoStock($productos) ?></strong></p>
    </div>
</div>
</body>
</html>
