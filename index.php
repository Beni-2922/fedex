<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/fx-favicon.ico" type="image/x-icon">
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
  <link rel="stylesheet" href="css/styles.css">
  <title>FedEx | Inicio</title>
</head>

<body>
  <!--Encabezado-->
  <header class="responsive-container">
    <div class="encabezado">
      <div class="image">
        <a class="image" href="index.php">
          <img src="img/logo.png">
        </a>
      </div>
    </div>
  </header>
  <!--Barra de navegación-->
  <nav class="responsive-container">
    <div class="boton-envio responsive-container">
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
  <!------------------------------------Inicio Aviso-------------------------------------------->
  <div class="alerta text-center animate__animated animate__fadeIn">
    <i class="fas fa-exclamation-triangle fa-3x alerta-icon"></i>
    <p>Este&nbsp;<b>Sitio Web</b>&nbsp;está desarrollado con fin educativo, demostrativo y sin fines de lucro.</p>
  </div>
  </div>

  <!------------------------------------Fin Aviso-------------------------------------------->
  <br>
  <!--Imagen principal-->
  <div class="background responsive-container">
    <img src="img/CA_2021_1_HERO_Movement-Gradient80_1200x450.jpg">
    <div class="texto-encima responsive-container"></div>
    <div class="centrado responsive-container">Conectados Con El Mañana</div>
  </div>

  <h1 class="d-flex justify-content-center font-style-bold m-5">Administra tus envíos</h1>
  <div class="container">
    <div>
      <img src="img/LAC_EN_2022_6_png_NA_open-an-account_mkt.png">
      <div class="enlace">
        <a href="#">ABRIR UNA CUENTA</a>
      </div>
    </div>
    <div>
      <img src="img/LAC_EN_2022_6_png_NA_service-alerts_mkt.png" alt="">
      <div class="enlace">
        <a href="alertas.php">ALERTAS DE SERVICIO</a>
      </div>
    </div>
    <div>
      <img src="img/LAC_EN_2022_6_png_NA_online-tools_mkt.png" alt="">
      <div class="enlace">
        <a href="herramientas-linea.php">HERRAMIENTAS EN LINEA</a>
      </div>
    </div>
    <div>
      <img src="img/LAC_EN_2022_6_png_NA_store-hours-services_mkt.png" alt="">
      <div class="enlace">
        <a href="#">HORARIO DE ATENCION Y SERVICIOS</a>
      </div>
    </div>
    <div>
      <img src="img/LAC_EN_2022_6_png_NA_fedex-billing-online_mkt.png" alt="">
      <div class="enlace">
        <a href="informacion.php">FACTURACION EN LINEA DE FEDEX</a>
      </div>
    </div>
  </div>


  <main class="responsive-container">
    <div class="container text-center" id="containermain">
      <div class="row align-items-start">
        <div class="col">
          <img src="img/MX_EN_2023_2_png_NA_UEFA_727x473_mkt.png" style="width: 450px;" style="height: 450px;">
        </div>
        <div class="col">
          <h3 class="title">¡Envía como campeón con FedEx!</h3>
          <div class="row justify-content-center">
            FedEx te lleva a la final de la UEFA Champions League 2023 en Estambul, Turquía.
          </div>
          <br>
          <div class="d-grid gap-2">
            <a class="rounded-pill btn btn-primary" type="button" href="promo.php">Haz clic Aquí</a>
          </div>
        </div>
      </div>
  </main>


  <main class="responsive-container">
    <div class="container text-center" id="containermain">
      <div class="row align-items-start">
        <div class="col">
          <h3 class="title">Complemento Carta Porte </h3>
          <div class="row justify-content-center">
            A continuación, las opciones tecnológicas
            que se utilizarán para recibir
            información sobre Complemento Carta Porte
          </div>
          <br>
          <div class="d-grid gap-2">
            <a class="rounded-pill btn btn-primary" type="button" href="carta-porte.php">Ingresa Aquí</a>
          </div>
        </div>
        <div class="col">
          <img src="img/MX_EN_2021_12_master_jpg_NA_Carta-Porte-FoC_mkt.jpg" style="width: 450px;"
            style="height: 450px;">
        </div>
      </div>
  </main>


  <!-----------------------------------------Fedex Bot-------------------------------------->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0"><img src="img/fx-favicon.ico"><img>
            </h4>
          </div>
          <div class="card-body">
            <div id="chatbox"></div>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Escribe tu mensaje aquí" id="message">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="send">Enviar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Footer  Pie de Página----->
  <footer class="text-center text-white responsive-container" style="background-color: #4D148C;">
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
      <section class="responsive-container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 justify-content-center">
            <p class="text-uppercase">Información de la compañía</p>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="acercadefedex.php" class="text-white seccion-ancla">Acerca de FedEx</a>
              </li>
              <li>
                <a href="#!" class="text-white seccion-ancla">FedEx y la Ecología</a>
              </li>
              <li>
                <a href="#!" class="text-white seccion-ancla">Alerta de fraude</a>
              </li>
              <li>
                <a href="#!" class="text-white seccion-ancla">Carreras</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 justify-content-center">
            <p class="text-uppercase">Ayuda al cliente</p>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="carta-porte.php" class="text-white seccion-ancla">Carta Porte</a>
              </li>
              <li>
                <a href="#!" class="text-white seccion-ancla">Herramientas en línea</a>
              </li>
              <li>
                <a href="#!" class="text-white seccion-ancla">Información sobre el recargo por combustible</a>
              </li>
              <li>
                <a href="privacy-policy.php" class="text-white seccion-ancla">Aviso de Privacidad</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 justify-content-center">
            <p class="text-uppercase">Más sobre FedEx</p>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white seccion-ancla">FedEx Developer Portal</a>
              </li>
              <li>
                <a href="#!" class="text-white seccion-ancla">Programa FedEx Rewards</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/bot.js"></script>
</body>

</html>
