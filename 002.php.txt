<?php
/**
 * EJERCICIO 2: Simulador de carrito de compras
 * ---------------------------------------------------------
 * Este archivo contiene:
 *  - Punto 1: Mostrar productos con nombre, precio, cantidad y subtotal
 *  - Punto 2: Calcular el total general
 *  - Punto 3: Aplicar descuentos según el total
 *  - Punto 4: Mostrar total sin descuento, descuento aplicado y total final
 * ---------------------------------------------------------
 */

$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

/**
 * Función que calcula el total del carrito mostrando subtotales.
 */
function calcularTotal(array $carrito): float {
    $total = 0;

    // ================================================================
    // Mostrar cada producto con nombre, precio, cantidad y subtotal
    // ================================================================
    foreach ($carrito as $item) {
        $subtotal = $item["precio"] * $item["cantidad"];

        echo "<strong>Producto:</strong> {$item['producto']}<br>";
        echo "Precio unitario: {$item['precio']} €<br>";
        echo "Cantidad: {$item['cantidad']}<br>";
        echo "Subtotal: $subtotal €<br><br>";

        $total += $subtotal;
    }

    return $total;
}


// ================================================================
// Calcular el total general
// ================================================================
$totalSinDescuento = calcularTotal($carrito);


// ================================================================
// Aplicar descuentos según el total
// ================================================================
$descuento = 0;

if ($totalSinDescuento > 1000) {
    $descuento = 0.10;
} elseif ($totalSinDescuento > 500) {
    $descuento = 0.05;
}

$totalFinal = $totalSinDescuento - ($totalSinDescuento * $descuento);


// ================================================================
// Mostrar total sin descuento, descuento aplicado y total final
// ================================================================
echo "<hr>";
echo "<strong>Total sin descuento:</strong> $totalSinDescuento €<br>";
echo "<strong>Descuento aplicado:</strong> " . ($descuento * 100) . "%<br>";
echo "<strong>Total final:</strong> $totalFinal €<br>";

?>
