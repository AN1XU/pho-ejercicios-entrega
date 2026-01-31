<?php
/**
 * EJERCICIO 1: Gestor de notas de estudiantes
 * ---------------------------------------------------------
 * 1. Mostrar nombre, promedio y estado
 * 2. Contar cuántos aprobaron
 * 3. Contar cuántos suspendieron
 * 4. Mostrar el estudiante con mejor promedio
 * ---------------------------------------------------------
 */

// Array con estudiantes y sus notas:
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

// Función para calcular el promedio
function calcularPromedio($notas) {
    return array_sum($notas) / count($notas);
}

$aprobados = 0;
$suspensos = 0;
$mejorEstudiante = "";
$mejorPromedio = -1;

// 1. Mostrar nombre, promedio y estado
foreach ($estudiantes as $nombre => $notas) {

    $promedio = calcularPromedio($notas);

    echo "Estudiante: $nombre\n";
    echo "Promedio: $promedio\n";

    if ($promedio >= 6) {
        echo "Estado: Aprobado\n\n";
        $aprobados++;
    } else {
        echo "Estado: Suspenso\n\n";
        $suspensos++;
    }

    // Comprobar mejor promedio
    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}

// 2. Total aprobados
echo "Total aprobados: $aprobados\n";

// 3. Total suspensos
echo "Total suspensos: $suspensos\n";

// 4. Mejor estudiante
echo "Mejor estudiante: $mejorEstudiante con promedio $mejorPromedio\n";
?>