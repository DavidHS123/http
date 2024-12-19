<?php
$contador = 0;
$file = 'counter.txt';

// Llegir el valor actual del fitxer
if (file_exists($file)) {
    $contador = (int)file_get_contents($file);
}

// Incrementar el valor i escriure-ho al fitxer
$contador += 1; // Incrementa en 1 (o un altre valor si cal)
file_put_contents($file, $contador);

echo "Contador des del fitxer: " . $contador;
?>
