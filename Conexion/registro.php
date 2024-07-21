<?php
include 'bd.php';
include 'registrar.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
  <a href="../index.php" class="button-absolute">Volver</a>

  <form action="" method="post" id="registro">

    <h1>Resgistro</h1>
        <div class="form-grid">
          <div class="mb-2">
            <label for="username" class="form-label">Usuario</label>
            <input type="text" id="username" name="username" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" required>
          </div>

          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
          </div>

          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
          </div>

          <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Correo Electronico</label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="mb-3">
            <label for="numero" class="form-label">Número telefonico</label>
            <input type="text" id="numero" name="numero" required>
          </div>
        </div>
        
      <input type="submit" value="Registrarse" class="button">   
    </form>
</body>
</html>

