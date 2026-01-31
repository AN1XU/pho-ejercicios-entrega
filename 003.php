<?php
/**
 * EJERCICIO 3: Analizador de texto
 * ---------------------------------------------------------
 * 1. Convertir el texto a minúsculas
 * 2. Contar cuántas palabras tiene
 * 3. Contar cuántas veces aparece cada palabra
 * 4. Mostrar solo palabras repetidas
 * 5. Mostrar la palabra más repetida
 * 6. Ignorar palabras de menos de 3 letras
 * ---------------------------------------------------------
 */

// Texto del enunciado
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";


// ================================================================
// Convertir el texto a minúsculas
// ================================================================
echo "<h3>1. Texto en minúsculas:</h3>";
$textoMinus = strtolower($texto);
echo $textoMinus . "<br><br>";


// ================================================================
// Contar cuántas palabras tiene
// ================================================================
echo "<h3>2. Total de palabras:</h3>";
$palabras = explode(" ", $textoMinus);
echo count($palabras) . "<br><br>";


// ================================================================
// Ignorar palabras de menos de 3 letras
// ================================================================
echo "<h3>6. Palabras con 3 letras o más:</h3>";
$palabrasFiltradas = array_filter($palabras, function($p) {
    return strlen($p) >= 3;
});
echo implode(", ", $palabrasFiltradas) . "<br><br>";


// ================================================================
// Contar cuántas veces aparece cada palabra
// ================================================================
echo "<h3>3. Conteo de palabras:</h3>";
$conteo = array_count_values($palabrasFiltradas);

foreach ($conteo as $palabra => $cantidad) {
    echo "$palabra: $cantidad veces<br>";
}
echo "<br>";


// ================================================================
// Mostrar solo palabras repetidas
// ================================================================
echo "<h3>4. Palabras repetidas:</h3>";

$hayRepetidas = false;

foreach ($conteo as $palabra => $cantidad) {
    if ($cantidad > 1) {
        echo "$palabra: $cantidad veces<br>";
        $hayRepetidas = true;
    }
}

if (!$hayRepetidas) {
    echo "No hay palabras repetidas.<br>";
}

echo "<br>";


// ================================================================
// Mostrar la palabra más repetida
// ================================================================
echo "<h3>5. Palabra más repetida:</h3>";

$maxPalabra = "";
$maxRepeticiones = 0;

foreach ($conteo as $palabra => $cantidad) {
    if ($cantidad > $maxRepeticiones) {
        $maxRepeticiones = $cantidad;
        $maxPalabra = $palabra;
    }
}

echo "$maxPalabra ($maxRepeticiones veces)<br>";

?>
