<?php
/**
 * EJERCICIO 3: Analizador de texto003.php
 * ---------------------------------------------------------
 * 1. Convertir el texto a minúsculas
 * 2. Contar cuántas palabras tiene
 * 3. Contar cuántas veces aparece cada palabra
 * 4. Mostrar solo palabras repetidas
 * 5. Mostrar la palabra más repetida
 * 6. Ignorar palabras de menos de 3 letras
 * ---------------------------------------------------------
 */

$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";


// ================================================================
// Convertir el texto a minúsculas
// ================================================================
$texto = strtolower($texto);


// ================================================================
// Separar el texto en palabras y contar cuantas palabras tiene
// ================================================================
$palabras = explode(" ", $texto);

// Mostrar cuántas palabras tiene el texto original
echo "<strong>Total de palabras:</strong> " . count($palabras) . "<br><br>";


// ================================================================
// Contar cuántas veces aparece cada palabra
// ================================================================
$conteo = array_count_values($palabrasFiltradas);


// ================================================================
// Mostrar solo palabras repetidas
// ================================================================
echo "<strong>Palabras repetidas:</strong><br>";

$maxPalabra = "";
$maxRepeticiones = 0;


// ================================================================
// Encontrar la palabra más repetida
// ================================================================
foreach ($conteo as $palabra => $cantidad) {

    if ($cantidad > 1) {
        echo "$palabra: $cantidad veces<br>";
    }

    if ($cantidad > $maxRepeticiones) {
        $maxRepeticiones = $cantidad;
        $maxPalabra = $palabra;
    }
}

echo "<hr>";
echo "<strong>La palabra más repetida es:</strong> $maxPalabra ($maxRepeticiones veces)<br>";

// ================================================================
//  Ignorar palabras de menos de 3 letras
// ================================================================
$palabrasFiltradas = array_filter($palabras, function($p) {
    return strlen($p) >= 3;
});


?>
