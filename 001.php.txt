<?php
/**
 * EJERCICIO 1: Gestor de notas de estudiantes
 * ---------------------------------------------------------
 * Este archivo contiene:
 *  - Punto 1: Mostrar nombre, promedio y estado
 *  - Punto 2: Contar cuántos aprobaron
 *  - Punto 3: Contar cuántos suspendieron
 *  - Punto 4: Mostrar el estudiante con mejor promedio
 * ---------------------------------------------------------
 */

// Array con estudiantes y sus notas:
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

/**
 * Función para calcular el promedio de un array de notas.
 */
function calcularPromedio($notas) {
    return array_sum($notas) / count($notas);
}


// ======================================================================
// Mostrar el nombre del estudiante, su promedio y si está aprobado/suspenso (bucle que recorre todo los estudiantes)
// ======================================================================

$aprobados = 0;
$suspensos = 0;
$mejorEstudiante = "";
$mejorPromedio = -1;

foreach ($estudiantes as $nombre => $notas) {

    $promedio = calcularPromedio($notas);

    echo "<strong>Estudiante:</strong> $nombre<br>";
    echo "Promedio: $promedio<br>";

    if ($promedio >= 6) {
        echo "Estado: Aprobado<br><br>";
        $aprobados++;
    } else {
        echo "Estado: Suspenso<br><br>";
        $suspensos++;
    }

    // Comprobación del mejor promedio
    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}


// ======================================================================
// Mostrar cuántos aprobaron
// ======================================================================

echo "<hr>";
echo "<strong>Total aprobados:</strong> $aprobados<br>";


// ======================================================================
// Mostrar cuántos suspendieron
// ======================================================================

echo "<strong>Total suspensos:</strong> $suspensos<br>";


// ======================================================================
// Mostrar el estudiante con el promedio más alto
// ======================================================================

echo "<strong>Mejor estudiante:</strong> $mejorEstudiante con promedio $mejorPromedio<br>";

?>
