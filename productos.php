<?php
require "config/configuracion.php";
require "includes/encabezado.php";

$productos = [
    ["nombre" => "Monitor",  "precio" => 185.00],
    ["nombre" => "Teclado",  "precio" => 25.00],
    ["nombre" => "Mouse",    "precio" => 15.50],
];
?>
<main>
    <h2>Nuestros productos</h2>
    <table>
        <tr><th>Producto</th><th>Precio</th><th>ITBMS</th><th>Total</th></tr>
        <?php foreach ($productos as $p): ?>
            <?php $impuesto = $p["precio"] * ITBMS; ?>
            <tr>
                <td><?= $p["nombre"] ?></td>
                <td>$<?= number_format($p["precio"], 2) ?></td>
                <td>$<?= number_format($impuesto, 2) ?></td>
                <td>$<?= number_format($p["precio"] + $impuesto, 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>
<?php include "includes/pie.php"; ?>
