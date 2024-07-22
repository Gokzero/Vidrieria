<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "Contacto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Sin conexión". $conn->connect_error);
}

?>