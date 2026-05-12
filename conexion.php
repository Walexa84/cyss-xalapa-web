<?php
// Configuración de la base de datos para XAMPP
$host = "localhost";
$user = "root";
$pass = "";
$db   = "cyss_db";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa"; 
} catch (PDOException $e) {
    // echo "Error de conexión: " . $e->getMessage();
}
?>
