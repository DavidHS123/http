<?php
session_start(); // Iniciar sessió
if (isset($_SESSION['num'])) {
    $_SESSION['num']++;
} else {
    $_SESSION['num'] = 1;
}
echo "Contador de sessió: " . $_SESSION['num'];
?>
