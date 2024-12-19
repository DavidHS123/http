<?php
// Mostrar errors per depuració
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Credencials de la base de dades
$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "estadistics";

// Connexió amb MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprovar connexió
if ($conn->connect_error) {
    die("Error en connectar a MySQL: " . $conn->connect_error);
}

// Obtenir IP de l'usuari
$ip = $_SERVER['REMOTE_ADDR'];

// Inserir IP a la base de dades
$sql = "INSERT INTO registre (ip) VALUES ('$ip')";
$conn->query($sql);

// Obtenir el total d'entrades
$resultat = $conn->query("SELECT COUNT(*) as total FROM registre");
$row = $resultat->fetch_assoc();

echo "Total d'entrades: " . $row['total'];

// Tancar connexió
$conn->close();
?>
