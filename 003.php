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

// 1. Convertir el texto a minúsculas
echo "1. Texto en minúsculas:\n";
$textoMinus = strtolower($texto);
echo $textoMinus . "\n\n";

// 2. Contar cuántas palabras tiene
echo "2. Total de palabras:\n";
$palabras = explode(" ", $textoMinus);
echo count($palabras) . "\n\n";

// 6. Ignorar palabras de menos de 3 letras
echo "6. Palabras con 3 letras o más:\n";
$palabrasFiltradas = [];
foreach ($palabras as $p) {
    if (strlen($p) >= 3) {
        $palabrasFiltradas[] = $p;
    }
}
echo implode(", ", $palabrasFiltradas) . "\n\n";

// 3. Contar cuántas veces aparece cada palabra
echo "3. Conteo de palabras:\n";
$conteo = array_count_values($palabrasFiltradas);

foreach ($conteo as $palabra => $cantidad) {
    echo $palabra . ": " . $cantidad . " veces\n";
}
echo "\n";

// 4. Mostrar solo palabras repetidas
echo "4. Palabras repetidas:\n";
$hayRepetidas = false;

foreach ($conteo as $palabra => $cantidad) {
    if ($cantidad > 1) {
        echo $palabra . ": " . $cantidad . " veces\n";
        $hayRepetidas = true;
    }
}

if (!$hayRepetidas) {
    echo "No hay palabras repetidas.\n";
}

echo "\n";

// 5. Mostrar la palabra más repetida
echo "5. Palabra más repetida:\n";
$maxPalabra = "";
$maxRepeticiones = 0;

foreach ($conteo as $palabra => $cantidad) {
    if ($cantidad > $maxRepeticiones) {
        $maxRepeticiones = $cantidad;
        $maxPalabra = $palabra;
    }
}

echo $maxPalabra . " (" . $maxRepeticiones . " veces)\n";

?>
