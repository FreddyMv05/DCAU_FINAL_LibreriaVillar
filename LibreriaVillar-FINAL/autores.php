


<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Autores - Libreria Villar</title>
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
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="libros.php">Libros</a></li>
          <li><a href="autores.php">Autores</a></li>
          </li>
          <li><a href="contact.php">Contacto/Registro</a></li>
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
          <li>Autores</li>
        </ol>
        <h2>Autores</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
  <div class="container">

    <div class="row justify-content-center"> <!-- Agregamos la clase justify-content-center para centrar el contenido -->

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member" style="margin-right: 50px; "> 
          <?php
          require_once "ConexionDB.php";
          $conexionDB = new ConexionDB();
          $conexionDB->conectar("localhost", "id21096977_dblibreria", "id21096977_root", "@Amigos0528");
          $conexion = $conexionDB->getConexion();

          try {
            $query = "SELECT apellido, nombre FROM autores";
            $stmt = $conexion->prepare($query);
            $stmt->execute();

            echo "<table>";
            echo "<tr><th><h4><b>Nombre</h4><br></th></b><th><h4><b>Apellido</h4><br></th></b></tr>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td><h5>" . $row['nombre'] . "</h5></td>"; // Movemos las etiquetas <h4> dentro de las celdas <td>
              echo "<td><h5>" . $row['apellido'] . "</h5></td>"; // Movemos las etiquetas <h4> dentro de las celdas <td>
              echo "</tr>";
            }
            echo "</table>";

          } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
          }
          ?>
        </div>
      </div>

    </div>
  </div>
</section><!-- End Team Section -->



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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
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