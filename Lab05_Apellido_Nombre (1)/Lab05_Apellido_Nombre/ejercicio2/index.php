<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Estructuras repetitivas</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 30px; }
        .caja { background: #fff; max-width: 500px; margin: 0 auto 20px; padding: 20px; border-radius: 8px; box-shadow: 0 1px 4px #0003; }
        h1 { text-align: center; color: #1f3a5f; }
        h2 { font-size: 18px; color: #1f3a5f; }
    </style>
</head>
<body>
<h1>Comparación de estructuras repetitivas</h1>

<div class="caja">
    <h2>a) Ciclo for: números del 1 al 20</h2>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "$i es par<br>";
        } else {
            echo "$i es impar<br>";
        }
    }
    ?>
</div>

<div class="caja">
    <h2>b) Ciclo while: suma de 1 a 100</h2>
    <?php
    $n = 1;
    $suma = 0;
    while ($n <= 100) {
        $suma += $n;
        $n++;
    }
    echo "La suma de los enteros del 1 al 100 es: <strong>$suma</strong>";
    ?>
</div>

<div class="caja">
    <h2>c) Ciclo do...while: cuenta regresiva</h2>
    <?php
    $contador = 10;
    do {
        echo "$contador<br>";
        $contador--;
    } while ($contador >= 1);
    echo "<strong>¡Despegue!</strong>";
    ?>
</div>
</body>
</html>
