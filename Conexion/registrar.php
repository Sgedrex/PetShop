<?php
session_start();
include 'bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $name = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];

    // Verificar si las contraseñas coinciden
    if ($password !== $confirmPassword) {
        echo '<div class="alert alert-danger">Las contraseñas no coinciden</div>';
        header("Location: registro.php");
        exit();
    }

    // Verificar si el nombre de usuario ya existe
    $stmt = $conexion->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo '<div class="alert alert-danger">El nombre de usuario ya existe</div>';
        $stmt->close();
        $conexion->close();
        exit();
    } else {
        // Almacenar la contraseña de manera segura
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conexion->prepare("INSERT INTO users (username, password, nombre, apellido, correo, numero) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $username, $hashed_password, $name, $apellido, $email, $numero);

        if ($stmt->execute()) {
            echo '<div class="alert alert-success">Usuario registrado exitosamente</div>';
            header("Location: ../index.php");
        } else {
            echo '<div class="alert alert-danger">Error al registrar el usuario</div>';
        }

        $stmt->close();
    }
}

$conexion->close();
?>
