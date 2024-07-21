<?php
$servername = "localhost";
$username = "gabriel"; 
$password = ""; 
$dbname = "petshop";

$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
