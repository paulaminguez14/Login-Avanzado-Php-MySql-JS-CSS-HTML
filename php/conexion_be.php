<?php
$host = "localhost"; // O la dirección del servidor MySQL de CDMON.
$user = "nombre_usuario"; // Tu usuario MySQL.
$password = "contraseña"; // Tu contraseña MySQL.
$db = "loginavanzado"; // El nombre de la base de datos creada.
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
