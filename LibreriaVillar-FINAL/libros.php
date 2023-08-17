<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Libros - Libreria Villar</title>
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
          <li>Libros</li>
        </ol>
        <h2>Libros</h2>

      </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">
    <div class="row">
      <?php
      // Realizar la conexión a la base de datos
      require_once "ConexionDB.php";
      $conexionDB = new ConexionDB();
      $conexionDB->conectar("localhost", "id21096977_dblibreria", "id21096977_root", "@Amigos0528");
      $conexion = $conexionDB->getConexion();

      
      $query = "SELECT titulo, notas FROM titulos";
      $stmt = $conexion->prepare($query);
      $stmt->execute();
      $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // Generar el HTML para cada libro
      foreach ($libros as $libro) {
        $titulo = $libro["titulo"];
        $notas = $libro["notas"];
      ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href=""><?php echo $titulo; ?></a></h4>
            <p><?php echo $notas; ?></p>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section><!-- End Services Section -->


    

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