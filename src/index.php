<?php
$host = "db";
$user = "root";
$password = "root";
$database = "testdb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "<h1>Hola Mundo con PHP y MySQL 🚀</h1>";
echo "<p>Conexión exitosa a la base de datos 🎉</p>";

$conn->close();
?>
