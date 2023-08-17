<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contacto - Libreria Villar</title>
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
          <li>Contacto</li>
        </ol>
        <h2>Contacto</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST["cedula"];
    $nombre = $_POST["name"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $tema = $_POST["subject"];
    $mensaje = $_POST["message"];
    $fecha = date("Y-m-d"); // Obtiene la fecha actual

    // Realizar la conexión a la base de datos
    require_once "ConexionDB.php";
    $conexionDB = new ConexionDB();
    $conexionDB->conectar();
    $conexion = $conexionDB->getConexion();

    try {
        $query = "INSERT INTO contacto (cedula, fecha, nombre, apellido, telefono, correo_electronico, asunto, comentario) VALUES (:cedula, :fecha, :nombre, :apellido, :telefono, :correo_electronico, :asunto, :comentario)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(":cedula", $cedula);
        $stmt->bindParam(":fecha", $fecha);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellido", $apellido);
        $stmt->bindParam(":telefono", $telefono);
        $stmt->bindParam(":correo_electronico", $email);
        $stmt->bindParam(":asunto", $tema);
        $stmt->bindParam(":comentario", $mensaje);

        $stmt->execute();
    } catch (PDOException $e) {
        // Manejo del error
    }
}
?>


    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Direccion</h3>
              <p>Avenida Imbert, #15, La Vega, República Dominicana</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>freddyvillarccs@gmail.com </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Llámanos</h3>
              <p>829-209-0000</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" lang="es" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11979.83190330694!2d-70.5290051!3d19.2194715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb02c84ebcfd2e1%3A0xe723261c71f2fb56!2sAv.+Imbert%2C+La+Vega+41000!5e0!3m2!1sen!2sdo!4v1627625780791!5m2!1sen!2sdo" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
    <form method="post" role="form" class="php-email-form">
        <div class="row">
              <div class="col-md-6 form-group">
    <input type="text" name="cedula" class="form-control" id="cedula" placeholder="Cedula" required>
</div>
            
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
            </div>
            
              <div class="col-md-6 form-group">
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" required>
            </div>
            
            
              <div class="col-md-6 form-group">
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono" required>
            </div>
            
 
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Tema" required>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
        </div>
     
        <div class="my-3" id="contact-form-messages">
            
        </div>
        <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
    </form>
</div>
        </div>

      </div>
    </section><!-- End Contact Section -->

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
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
  $(document).ready(function() {
    
    $(".php-email-form").submit(function(event) {
      event.preventDefault(); 

      
      $.ajax({
        type: "POST",
        url: "process_contact.php", // El archivo PHP que manejará la inserción en la base de datos
        data: $(this).serialize(),
        success: function(response) {
          // Mostrar la respuesta del servidor en el div "contact-form-messages"
          $("#contact-form-messages").html(response);

          // Si la respuesta es "success", puedes restablecer el formulario después del envío exitoso
          if (response === "success") {
            $(".php-email-form")[0].reset();
          }
        },
        error: function() {
          // Mostrar un mensaje de error en caso de error en la solicitud AJAX
          $("#contact-form-messages").html('<div class="error-message">Error al enviar el mensaje. </div>');
        }
      });
    });
  });
</script>



</body>
</body>

</html>