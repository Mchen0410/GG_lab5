<?php
// Ejercicio 1: Estadísticas de calificaciones
$notas = [78, 95, 67, 88, 91, 72, 60, 84, 100, 76];

$cantidad   = count($notas);
$suma       = 0;
$mayor      = $notas[0];
$menor      = $notas[0];
$aprobados  = 0;
$reprobados = 0;

foreach ($notas as $nota) {
    $suma += $nota;
    if ($nota > $mayor) { $mayor = $nota; }
    if ($nota < $menor) { $menor = $nota; }
    if ($nota >= 71) { $aprobados++; } else { $reprobados++; }
}
$promedio = $suma / $cantidad;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Calificaciones</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 30px; }
        .caja { background: #fff; max-width: 500px; margin: auto; padding: 20px; border-radius: 8px; box-shadow: 0 1px 4px #0003; }
        h1 { font-size: 22px; color: #1f3a5f; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
        th, td { border: 1px solid #ccc; padding: 6px; text-align: center; }
        th { background: #1f3a5f; color: #fff; }
        .reprobado { color: #c0392b; font-weight: bold; }
        .aprobado { color: #27ae60; font-weight: bold; }
    </style>
</head>
<body>
<div class="caja">
    <h1>Estadísticas de calificaciones</h1>

    <h3>Listado de notas</h3>
    <table>
        <tr><th>#</th><th>Nota</th><th>Estado</th></tr>
        <?php $i = 1; foreach ($notas as $nota): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $nota ?></td>
                <?php if ($nota >= 71): ?>
                    <td class="aprobado">Aprobado</td>
                <?php else: ?>
                    <td class="reprobado">Reprobado</td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Resumen</h3>
    <table>
        <tr><td>Estudiantes evaluados</td><td><?= $cantidad ?></td></tr>
        <tr><td>Suma de calificaciones</td><td><?= $suma ?></td></tr>
        <tr><td>Promedio del grupo</td><td><?= number_format($promedio, 2) ?></td></tr>
        <tr><td>Calificación más alta</td><td><?= $mayor ?></td></tr>
        <tr><td>Calificación más baja</td><td><?= $menor ?></td></tr>
        <tr><td>Aprobados (nota &ge; 71)</td><td><?= $aprobados ?></td></tr>
        <tr><td>Reprobados (nota &lt; 71)</td><td><?= $reprobados ?></td></tr>
    </table>
</div>
</body>
</html>
