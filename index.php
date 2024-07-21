<?php
include 'Conexion/bd.php';


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pet Shop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/stylelog.css" rel="stylesheet">
</head>

<td>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.php"><span>Pet Shop</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
        </div>

        <nav id="navbar" class="navbar" >
                 <ul>
            <li><a class="nav-link scrollto active" href="#hero">INICIO</a></li>
            <li><a class="nav-link scrollto"  href="#about">NUESTRA TIENDA</a></li>
            <li><a class="nav-link scrollto"  href="#footer">Usuario</a></li>
            <li><a class="nav-link scrollto "  href="#Product">PRODUCTOS</a></li>
            <li><a class="nav-link scrollto"  href="#team">Equipo</a></li>
            <li class="dropdown"><a href="#"><span>Idiomas</span> <i class="bi bi-chevron-down" style="color:#FF0000ff"></i></a>
              <ul>
                <li><a href="Idiomas/home.php?lang=en">English</a></li>
       		     <li><a href="Idiomas/home.php?lang=pt">Portugues</a></li>
              
              </ul>
            </li>
            <li><a class="nav-link scrollto"  href="#contact">Contactos</a></li>
            <li class="dropdown"><a href="#"><span>Más</span> <i class="bi bi-chevron-down" style="color:#FF0000ff"></i></a>
              <ul>
              <li><a href="Sesion/logout.php">Cerrar Sesión</a></li>              
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header>
 
<div>
<td rowspan="2">
  <form name="login" method="post" action="" id="login">
      <table width="250" border="0" align="center" cellpadding="0" cellspacing="2">
      <tr>
      <?php include 'Conexion/controlador.php' ?>
        <div>
      <td><label for="username">Usuario:</label></td>
      <td><input name="username" type="text" id="username" required></td>
        </div>
      </tr>
      <br>
      <tr>
        <div>
        <td><label for="password"> Contraseña</label></td>
        <td><input name="password" type="password" id="password" required></td>
        </div>
      </tr>

      <tr align="center">
        <div>
       <td colspan="2">
       <button type="submit" name="enviar" id="enviar" value="Enviar">Iniciar Sesión</button>
        </div>
      </tr>

      <tr align="left">
      <td><a href="Conexion/registro.php">Registrarse</a>
      </tr>
      
      </table>
      </form>
    </td>
</div> 
</body>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</html>