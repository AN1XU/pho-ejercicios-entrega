<?php
/**
 * EJERCICIO 2: Simulador de carrito de compras
 * ---------------------------------------------------------
 * 1. Mostrar productos con nombre, precio, cantidad y subtotal
 * 2. Calcular el total general
 * 3. Aplicar descuentos según el total
 * 4. Mostrar total sin descuento, descuento aplicado y total final
 * ---------------------------------------------------------
 */

$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

// Función que calcula el total del carrito mostrando subtotales
function calcularTotal(array $carrito): float {
    $total = 0;

    // 1. Mostrar productos con nombre, precio, cantidad y subtotal
    foreach ($carrito as $item) {
        $subtotal = $item["precio"] * $item["cantidad"];

        echo "Producto: " . $item["producto"] . "\n";
        echo "Precio unitario: " . $item["precio"] . " €\n";
        echo "Cantidad: " . $item["cantidad"] . "\n";
        echo "Subtotal: " . $subtotal . " €\n\n";

        $total += $subtotal;
    }

    return $total;
}

// 2. Calcular el total general
$totalSinDescuento = calcularTotal($carrito);

// 3. Aplicar descuentos según el total
$descuento = 0;

if ($totalSinDescuento > 1000) {
    $descuento = 0.10;
} elseif ($totalSinDescuento > 500) {
    $descuento = 0.05;
}

$totalFinal = $totalSinDescuento - ($totalSinDescuento * $descuento);

// 4. Mostrar total sin descuento, descuento aplicado y total final
echo "Total sin descuento: " . $totalSinDescuento . " €\n";
echo "Descuento aplicado: " . ($descuento * 100) . "%\n";
echo "Total final: " . $totalFinal . " €\n";

?>