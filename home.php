<?php
include 'Conexion/bd.php';
include 'Estilo/estilo.coffee';
//cookies start
session_start();

function redirectToLanguagePage($lang) {
    if ($lang == 'pt') {
        header("Location: Idiomas/pt.php");
        exit();
    } elseif ($lang == 'en') {
        header("Location: Idiomas/english.php");
        exit();
    }
}
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];

    setcookie('lang', $lang, time() + (86400 * 30), "/");

    redirectToLanguagePage($lang);
}
if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];

    // Redirige a la página del idioma correspondiente
    redirectToLanguagePage($lang);
}

if(!isset($_SESSION['username'])) {
  header("Location: index.php"); 
  exit();
} else {
  $log = $_SESSION['username'];
}

$conexion->close();

if(!isset($_SESSION['contar'])) {
  $_SESSION['contar'] = 1;
} else {
  $_SESSION['contar']++;
}
//cookies end 
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
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="home.php"><span>Pet Shop</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
        </div>

        <nav id="navbar" class="navbar" >
                 <ul>
            <li><a class="nav-link scrollto active" href="#hero">INICIO</a></li>
            <li><a class="nav-link scrollto"  href="#about">NUESTRA TIENDA</a></li>
        <!--    <li><a class="nav-link scrollto"  href="#footer">Usuario</a></li> -->
            <li><a class="nav-link scrollto "  href="#Product">PRODUCTOS</a></li>
            <li><a class="nav-link scrollto"  href="#team">Equipo</a></li>
            <li class="dropdown"><a href="#"><span>Idiomas</span> <i class="bi bi-chevron-down" style="color:#FF0000ff"></i></a>
              <ul>
                <li><a href="Idiomas/english.php?lang=en">English</a></li>
       		     <li><a href="Idiomas/pt.php?lang=pt">Portugues</a></li>
              
              </ul>
            </li>
            <li><a class="nav-link scrollto"  href="#contact">Contactos</a></li>
            <li class="dropdown"><a href="#"><span>Más</span> <i class="bi bi-chevron-down" style="color:#FF0000ff"></i></a>
              <ul>
              <li><a href="Sesion/logouthome.php">Cerrar Sesión</a></li>              
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link scrollto"><img src="assets/img//Icon/user.png" alt="user" class="usuario-icono" style="width: 30px; height: 30px; border-radius: 50%;">
                <span><?php echo (" " ). $log; ?></span></a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->











<div  id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">

<div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" style="color:#FFFFFF">
<h2></h2>
<h1>Tienda de mascotas </h1>
      <h2> </h2>
</div>
 <br>
 

    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
 

      



<section id="hero" class="d-flex align-items-center">



     




 <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/PET/mascota1.jpg"   class="d-block w-100 position-relative" alt="...">
      <div class="container text-center position-relative" >
         
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/PET/mascota2.jpg" width="350" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/PET/mascota3.jpg" width="350" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>







</section>












  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>   







<!--
  <main id="main">

  <center>
  <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-md-4 col-4  align-items-center" data-aos="zoom-in" data-aos-delay="400">
          <a href="home.php?lang=en">View the english version of the site</a>
          </div>

          <div class="col-md-4 col-4  align-items-center" data-aos="zoom-in" data-aos-delay="400">
          <a href="home.php?lang=pt">Veja a versão em português do site</a>
          </div>


        </div>

      </div>
    </section>
  </center>
<!-- End Clients Section -->











    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>Objetivo General</h2>
            <h3>Crear un ambiente acogedor y confiable donde los dueños de mascotas puedan encontrar todo lo necesario para el cuidado, bienestar y entretenimiento de sus mascotas, promoviendo así relaciones saludables entre humanos y animales.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              Objetivos Específicos
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ofrecer una amplia gama de productos de alta calidad para mascotas, incluyendo alimentos, juguetes, accesorios, productos de higiene y cuidado. </li>
              <li><i class="ri-check-double-line"></i> Brindar asesoramiento personalizado y atención al cliente experta para ayudar a los dueños a seleccionar los productos más adecuados para las necesidades específicas de sus mascotas. </li>
              <li><i class="ri-check-double-line"></i> Mantener instalaciones limpias, seguras y bien organizadas que proporcionen un entorno cómodo tanto para los clientes como para las mascotas.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section =======-->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

 

          <div class="col-lg-12 col-12 text-center">
            <span><?php echo ("Hola, 
            
            " .$log. " has accedido a esta página " . $_SESSION['contar'] . " veces");?></span>
          </div>

 

       

        </div>

      </div>
    </section> <!--End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 pt-1 pt-lg-0  d-flex a-lign-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Misión</h3>
              <p>
        En nuestra tienda de mascotas, nos comprometemos a ser el destino preferido para todos los amantes de las mascotas, ofreciendo productos de alta calidad, asesoramiento experto y un ambiente acogedor para mejorar la vida de las mascotas y sus dueños. 
        Nos esforzamos por promover la adopción responsable, el bienestar animal y la satisfacción del cliente en todo lo que hacemos.
              </p>
              
            </div>
         </div>
          



      
          <div class="col-lg-6 pt-1 pt-lg-0  d-flex a-lign-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Visión</h3>
              <p>
Nos visualizamos como el principal referente en la comunidad para todo lo relacionado con el cuidado y el bienestar de las mascotas. Buscamos ser reconocidos por nuestra excelencia en el servicio al cliente, nuestro compromiso con la calidad de los productos y nuestro impacto positivo en la comunidad y el medio ambiente. Aspiramos a crear un mundo donde cada mascota sea amada, cuidada y respetada, y donde los dueños de mascotas encuentren todo lo que necesitan para enriquecer la vida de sus compañeros peludos.
              </p>
             
            </div>
          </div>




</div>
      </div>
    </section><!-- End Why Us Section -->
















 <!-- ======= Why Us Section ======= -->
    <section id="Product" class="Product">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3> Nuestros productos </h3>
              <p>
                
              </p>
<img src="assets/img/bannerp.jpeg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img src="assets/img/bannerp.jpeg" class="img-fluid" alt="">
                    <br></br>
                    <h4>Producto</h4>
                   
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4> .</h4>
                    
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4> .</h4>
                    
                  </div>
                </div>


  <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                 <i class="ri-spam-2-line"></i>
                    <h4> .</h4>
                    
                  </div>
                </div>

  <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4> .</h4>
                    
                  </div>
                </div>

  <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4> .</h4>
                    
                  </div>
                </div>

  <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4> .</h4>
                    
                  </div>
                </div>

  <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4> .</h4>
                    
                  </div>
                </div>





              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->














    <!-- ======= Cta Section ======= -->    <section class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3></h3>
          <p> </p>
        
        </div>

      </div>
    </section><!-- End Cta Section -->

  

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Ofertas</h2>

        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-4 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/ProductosP/Acana_Heritage2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Productos Acana Heritage</h4>
                <p>Oferta solo por esta semana </p>

                <div class="portfolio-links">
                  <a href="assets/img/ProductosP/Acana_Heritage.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Comida para perros Acana Heritage 13 libras"><i class="bx bx-plus"></i></a>
                  <a href="assets/img/ProductosP/Acana_Heritage2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Comida para perros Acana Heritage 13 libras"></i></a>
                  <a href="assets/img/ProductosP/Acana_Heritage3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Comida para perros Acana Heritage 13 libras"></i></a>
                  <a href="Acana.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/ProductosP/dogshow1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Productos Dog Show</h4>
                <p>Oferta solo por esta semana </p>

                <div class="portfolio-links">
                  <a href="assets/img/ProductosP/dogshow1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Alimento Húmedo para cachorro"><i class="bx bx-plus"></i></a>
                  <a href="assets/img/ProductosP/dogshow2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Alimento Húmedo para cachorro"></i></a>
                  <a href="assets/img/ProductosP/dogshow3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Alimento Húmedo para cachorro"></i></a>
                  <a href="DogShow.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/ProductosP/Dermacalm.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Productos Dermapets</h4>
                <p>Oferta solo por esta semana </p>

                <div class="portfolio-links">
                  <a href="assets/img/ProductosP/Dermacalm.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Alimento Húmedo para cachorro"><i class="bx bx-plus"></i></a>
                  <a href="assets/img/ProductosP/Dermatryl.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Alimento Húmedo para cachorro"></i></a>
                  <a href="assets/img/ProductosP/Dermatryl_spa.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Alimento Húmedo para cachorro"></i></a>
                  <a href="Dermapets.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section --> 
























    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Integrantes del Grupo</h2>
             
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">




              <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                 <div class="pic social"><i class="bi bi-person-fill " style="font-size:64px"></i></div>
                  <div class="member-info">
                    <h4>Gabriel Alba</h4>
                    <span>CTO</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

   









    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact</h2>
              <p></p>
            </div>
          </div>


            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+507 774-3012</p>
                </div>
              </div>
            </div>

       
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section id="footer" footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            
            <p>

            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            
            <ul>
            </ul>
          </div>

    		


        </div>
      </div>
    </div>













    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span> -Gabriel Alba </span></strong>UTP Panamá - &copy; Todos los Derechos Reservados
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>