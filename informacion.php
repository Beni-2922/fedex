<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

  <style>
    @import '~mdb-ui-kit/css/mdb.min.css';
  </style>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="img/fx-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/styles.css">
  <title>FedEx | Información</title>
</head>

<body>
  <!--Encabezado-->
  <header>
    <div class="encabezado">
      <div class="image">
        <a class="image" href="index.php">
          <img src="img/logo.png">
        </a>
      </div>
    </div>
  </header>
  <!--Barra de navegación-->
  <nav>
    <div class="boton-envio">
      <div class="button">
      <a href="envios.php" class="btn-neon">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Servicios
                </a>
                <a href="rastreo.php" class="btn-neon">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Rastreo
                </a>
                <a href="soporte.php" class="btn-neon">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Soporte
                </a>
                <a href="login.php" class="btn-neon">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Inscribirse/Iniciar Sesión
                </a>
        <button type="button" class="btn btn-light">
          <span class="material-symbols-outlined">
            account_circle
          </span>
        </button>

        <button type="button" class="btn btn-light">
          <span class="material-symbols-outlined">
            search
          </span>
        </button>
      </div>
    </div>
  </nav>


  <br>

  <!-- Carousel wrapper -->
  <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <img src="img/bann.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-none d-md-block">
          <h1 class="online"> FedEx® Billing Online<br>
            Facturación eficiente.
            Negocio eficiente.
            Recibe, revisa, paga y solicita ajustes a tus facturas, todo desde un sitio seguro en línea.
          </h1>
        </div>
      </div>

      <!-- Single item -->
      <div class="carousel-item">
        <img src="img/bann.jpg" class="d-block w-100" alt="FedEx" />
        <div class="carousel-caption d-none d-md-block">
          <h1 class="online"> FedEx® Billing Online<br>
            Facturación eficiente.
            Negocio eficiente.
            Recibe, revisa, paga y solicita ajustes a tus facturas, todo desde un sitio seguro en línea.
          </h1>
        </div>
      </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel wrapper -->

  <div class="container texto">
    <p>FedEx® Billing Online. Tu ventaja de comercio electrónico. </p>
  </div>
  <div class="container">
    <p class="neg">Pasa más tiempo con tu negocio y menos tiempo administrando tu cuenta con nuestra solución de
      facturación eficiente y flexible.

      Con FedEx Billing Online puedes:
    </p>
  </div>
  <div class="container">

    <ul class="list">
      <li>Ver y administrar fácilmente tus facturas y detalles de envío en línea</li>

      <li>Descargar tus facturas como archivos PDF*</li>

      <li>Descargar los detalles de la factura en un archivo de datos XML, XLS o CSV*</li>

      <li>Administrar varias cuentas con una sola identificación de usuario</li>

      <li>facturas en línea usando tarjetas de crédito (disponible en la mayoría de los países)

      <li>Administrar las preferencias de pago a través de pagos automáticos (la función de pago con tarjeta de crédito
        debe de estar habilitada)</li>

      <li>ajustes de facturas en línea fácilmente. Recibirás una respuesta inmediata en la pantalla para las solicitudes
        de guías aéreas individuales elegibles.</li>
    </ul>
  </div>
  <div class="container">
    <p>Regístrate ahora para disfrutar de la forma más fácil de administrar tus facturas de FedEx.</p>
  </div>





  <!-- Footer  Pie de Página -->
  <footer class="text-center text-white" style="background-color: #4D148C;">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://web.facebook.com/FedEx/?_rdc=1&_rdr"
          role="button" target="_blank"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/fedex" role="button"
          target="_blank"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/user/fedex/custom" role="button"
          target="_blank"><i class="fab fa-youtube"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1"
          href="https://www.linkedin.com/showcase/fedex-am%C3%A9rica-latina/" role="button" target="_blank"><i
            class="fab fa-linkedin-in"></i></a>
      </section>
      <!-- Section: Social media -->

      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->

            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">

        </form>
      </section>
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 justify-content-center">
            <p class="text-uppercase">Información de la compañía</p>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="acercadefedex.html" class="text-white">Acerca de FedEx</a>
              </li>
              <li>
                <a href="#!" class="text-white">FedEx y la Ecología</a>
              </li>
              <li>
                <a href="#!" class="text-white">Alerta de fraude</a>
              </li>
              <li>
                <a href="#!" class="text-white">Carreras</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 justify-content-center">
            <p class="text-uppercase">Ayuda al cliente</p>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Carta Porte</a>
              </li>
              <li>
                <a href="#!" class="text-white">Herramientas en línea</a>
              </li>
              <li>
                <a href="#!" class="text-white">Información sobre el recargo por combustible</a>
              </li>
              <li>
                <a href="privacy-policy.html" class="text-white">Aviso de Privacidad</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 justify-content-center">
            <p class="text-uppercase">Más sobre FedEx</p>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">FedEx Developer Portal</a>
              </li>
              <li>
                <a href="#!" class="text-white">Programa FedEx Rewards</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <p>Este sitio esta realizado con fines educativos y sin fines de lucro.</p>
      <p>Seminario en Marcos de Trabajo de TI. <br>
        Pérez San Juan Brayan <br>
        Pérez Reyes Brandon <br>
        Peña Aragón Benito <br>
        Zamora Meneses Reyna Samantha</p>
      <a class="text-white" href="#"></a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>

</html>