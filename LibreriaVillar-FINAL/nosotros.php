<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nosotros - Libreria Villar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi  d-flex align-items-center"><span>Freddy Villar</span></i></i>
        <i class="bi  d-flex align-items-center ms-4"><span>2021-1870</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">Libreria Villar</a></h1>

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="libros.php">Libros</a></li>
          <li><a href="autores.php">Autores</a></li>
          </li>
          <li><a href="contact.html">Contacto/Registro</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Inicio</a></li>
          <li>Nosotros</li>
        </ol>
        <h2>Nosotros</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>¿Quiénes somos?</h3>
            <p class="fst-italic">
              En Librería Villar, somos un equipo apasionado de amantes de los libros y la lectura. Nuestra misión es ser el puente que conecta a las personas con el maravilloso mundo de la literatura, proporcionando un espacio acogedor y enriquecedor para que nuestros clientes exploren, aprendan y encuentren nuevas emociones entre las páginas de nuestros libros.

              Desde que abrimos nuestras puertas, hemos buscado ofrecer una amplia selección de títulos cuidadosamente escogidos, desde los clásicos más atemporales hasta las últimas novedades literarias. Queremos que nuestra librería sea un refugio donde los lectores de todas las edades y gustos puedan descubrir joyas literarias y vivir aventuras sin límites.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Lee.</li>
              <li><i class="bi bi-check-circle"></i> Aprende.</li>
              <li><i class="bi bi-check-circle"></i> Descubre.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <?php
require_once "ConexionDB.php";
$conexionDB = new ConexionDB();
$conexionDB->conectar("localhost", "id21096977_dblibreria", "id21096977_root", "@Amigos0528");
$conexion = $conexionDB->getConexion();

// Obtener la cantidad de libros
try {
  $queryLibros = "SELECT COUNT(*) as totalLibros FROM titulos";
  $stmtLibros = $conexion->prepare($queryLibros);
  $stmtLibros->execute();
  $resultLibros = $stmtLibros->fetch(PDO::FETCH_ASSOC);
  $cantidadLibros = $resultLibros['totalLibros'];
} catch (PDOException $e) {
  echo "Error en la consulta de libros: " . $e->getMessage();
}

// Obtener la cantidad de autores
try {
  $queryAutores = "SELECT COUNT(*) as totalAutores FROM autores";
  $stmtAutores = $conexion->prepare($queryAutores);
  $stmtAutores->execute();
  $resultAutores = $stmtAutores->fetch(PDO::FETCH_ASSOC);
  $cantidadAutores = $resultAutores['totalAutores'];
} catch (PDOException $e) {
  echo "Error en la consulta de autores: " . $e->getMessage();
}
?>

<!-- Sección Counts -->
<section id="counts" class="counts">
  <div class="container">
    <div class="row no-gutters">

      <!-- Cantidad de Libros -->
      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="<?= $cantidadLibros ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Cantidad de <strong>Libros</strong> disponibles.</p>
          <a href="libros.php">Click aquí para verlos &raquo;</a>
        </div>
      </div>

      <!-- Cantidad de Autores -->
      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
        <div class="count-box">
          <i class="bi bi-headset"></i>
          <span data-purecounter-start="0" data-purecounter-end="<?= $cantidadAutores ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Cantidad de <strong>Autores</strong> en nuestra plataforma.</p>
          <a href="autores.php">Click aquí para verlos &raquo;</a>
        </div>
      </div>

      <!-- Aquí puedes agregar más contadores si lo deseas -->

    </div>
  </div>
</section>


  <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Proveedores</h2>
          <p>Agradecemos a nuestros proveedores.</p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/campamento-virtual-bijrd-logo-e1602862010792.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/libro.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/libro2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo-full.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/libro3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/libro5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/logo6.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

   

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer">

   

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Links útiles</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="index.php">Inicio</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="nosotros.php">Nosotros</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="libros.php">Libros</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="autores.php">Autores</a></li>

          </ul>
        </div>



        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contáctanos</h4>
          <p>
            Avenida Imbert, #15 <br>
            La Vega<br>
            República Dominicana <br><br>
            <strong>Teléfono</strong> +1 829-209-0000<br>
            <strong>Email:</strong> freddyvillarccs@gmail.com<br>
          </p>

        </div>

        <div class="col-lg-3 col-md-6 footer-info">
          <h3>Acerca de Libreria Villar</h3>
          <p>En Librería Villar, nuestra pasión por los libros nos impulsa a abrir las puertas de la imaginación y el saber. Sumérgete en nuestro vasto universo literario 
            y descubre historias que te inspirarán, conocimientos que te enriquecerán y sueños que se harán realidad en cada página.</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Libreria Villar</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>