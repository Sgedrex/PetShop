<?php
session_start();
include 'bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo '<div class="alert alert-danger">Debe llenar todos los campos</div>';
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conexion->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                // Inicio de sesión exitoso
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $id;
                header("Location: home.php");
                exit(); 
            } else {
                echo '<div class="alert alert-danger">Contraseña incorrecta</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Usuario no encontrado</div>';
        }

        $stmt->close();
    }
}

$conexion->close();
?>
