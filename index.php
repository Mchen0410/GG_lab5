<?php
// Ejercicio 6: Sistema de pedidos con excepciones
class Pedido {
    const IMPUESTO = 0.07; // 7 %

    private $cliente;
    private $producto;
    private $precio;
    private $cantidad;

    public function __construct($cliente, $producto, $precio, $cantidad) {
        if ($cantidad <= 0) {
            throw new Exception("La cantidad debe ser mayor que cero.");
        }
        if ($precio <= 0) {
            throw new Exception("El precio debe ser mayor que cero.");
        }
        $this->cliente  = $cliente;
        $this->producto = $producto;
        $this->precio   = $precio;
        $this->cantidad = $cantidad;
    }

    public function calcularSubtotal() {
        return $this->precio * $this->cantidad;
    }

    public function calcularImpuesto() {
        return $this->calcularSubtotal() * self::IMPUESTO;
    }

    public function calcularTotal() {
        return $this->calcularSubtotal() + $this->calcularImpuesto();
    }

    public function mostrarResumen() {
        $html  = "Cliente: {$this->cliente}<br>";
        $html .= "Producto: {$this->producto}<br>";
        $html .= "Precio unitario: $" . number_format($this->precio, 2) . "<br>";
        $html .= "Cantidad: {$this->cantidad}<br>";
        $html .= "Subtotal: $" . number_format($this->calcularSubtotal(), 2) . "<br>";
        $html .= "Impuesto (" . (self::IMPUESTO * 100) . "%): $" . number_format($this->calcularImpuesto(), 2) . "<br>";
        $html .= "<strong>Total: $" . number_format($this->calcularTotal(), 2) . "</strong>";
        return $html;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 - Pedidos</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 30px; }
        .caja { background: #fff; max-width: 500px; margin: 0 auto 20px; padding: 20px; border-radius: 8px; box-shadow: 0 1px 4px #0003; }
        h1 { text-align: center; color: #1f3a5f; }
        h2 { font-size: 18px; color: #1f3a5f; }
        .ok { border-left: 6px solid #27ae60; }
        .error { border-left: 6px solid #c0392b; color: #c0392b; }
    </style>
</head>
<body>
<h1>Sistema de pedidos</h1>

<div class="caja ok">
    <h2>Caso 1: pedido válido</h2>
    <?php
    try {
        $pedido1 = new Pedido("Ana Pérez", "Monitor", 185.00, 2);
        echo $pedido1->mostrarResumen();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</div>

<div class="caja error">
    <h2>Caso 2: pedido inválido</h2>
    <?php
    try {
        $pedido2 = new Pedido("Carlos Díaz", "Teclado", 25.00, 0);
        echo $pedido2->mostrarResumen();
    } catch (Exception $e) {
        echo "<strong>Error:</strong> " . $e->getMessage();
    }
    ?>
</div>
</body>
</html>
