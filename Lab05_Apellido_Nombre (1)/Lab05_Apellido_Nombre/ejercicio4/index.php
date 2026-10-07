<?php
/*
 * EXPLICACIÓN: include vs require
 *
 * Prueba realizada: se cambió temporalmente el nombre de un archivo incluido
 * (por ejemplo includes/pie.php -> includes/pie_x.php) y se recargó la página.
 *
 * - include: si no encuentra el archivo, PHP genera un WARNING, pero el script
 *   CONTINÚA ejecutándose. La página se muestra incompleta (sin el pie).
 *
 * - require: si no encuentra el archivo, PHP genera un FATAL ERROR y el script
 *   SE DETIENE de inmediato. No se muestra nada de lo que sigue.
 *
 * Por eso se usa require para archivos indispensables (configuración y
 * encabezado, que definen las constantes y el HTML base) e include para
 * partes que no impiden que la página funcione (el pie).
 */
require "config/configuracion.php";
require "includes/encabezado.php";
?>
<main>
    <h2>Bienvenido a <?= NOMBRE_EMPRESA ?></h2>
    <p>Somos una empresa dedicada a la venta de equipos de tecnología.</p>
    <p>Los precios de nuestros productos incluyen un ITBMS del <?= ITBMS * 100 ?>%.</p>
</main>
<?php include "includes/pie.php"; ?>
