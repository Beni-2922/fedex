<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <style>
    @import "~mdb-ui-kit/css/mdb.min.css";
  </style>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="img/fx-favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/styles.css" />
  <title>FedEx | Rastreo</title>
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
        <img src="img/CA_EN_2021_1_HERO_woman-on-computer_BrandSlab_2400x700.jpg" class="d-block w-100"
          alt="Sunset Over the City" />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="rastreos">Rastreo</h5>
          <p class="rastreos1">Nuestras herramientas de rastreo te otorgan control sobre tus envíos y te ayudan a
            mantenerte informado para que puedas realizar envíos con confianza.
          </p>
        </div>
      </div>

      <!-- Single item -->
      <div class="carousel-item">
        <img src="img/1517462576366.jpg" class="d-block w-100" alt="" height="394" />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="rastreos">Rastreo</h5>
          <p class="rastreos1">Nuestras herramientas de rastreo te otorgan control sobre tus envíos y te ayudan a
            mantenerte informado para que puedas realizar envíos con confianza.
          </p>
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

  <div class="opciones">Opciones de rastreo</div>

  <div class="container row principal">
    <div class="card tarjetas" style="width: 18rem;">
      <img src="img/master_16087_jm44093_528144394.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Rastreo avanzado</h5>
        <p class="card-text">Para gozar de una experiencia de rastreo detallada, inicia sesión para acceder de manera
          práctica y rápida a la información que necesitas. Obtén el estado de tus envíos filtrando por rango de fechas
          o código postal. No es necesario ingresar un número de rastreo o referencia.</p>
      </div>
    </div>
    <div class="card tarjetas" style="width: 18rem;">
      <img src="img/online_documents_cell_mobile_1303466693.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Rastrear por referencia</h5>
        <p class="card-text">Recibe actualizaciones de estado en relación con tu paquete sin tener que iniciar sesión.
          Realiza un rastreo con tu número de referencia personalizado.</p>
      </div>
    </div>
    <div class="card tarjetas" style="width: 18rem;">
      <img src="img/printing_access_airport_1167049848.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Rastrear por número</h5>
        <p class="card-text">Realiza un rastreo de tus envíos locales al instante haciendo clic con un solo botón. No es
          necesario iniciar sesión. Utiliza tu número de rastreo para acceder al estado más reciente del paquete, las
          rutas de entrega y los tiempos de entrega estimada.
          Rastrear ahora
        </p>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Rastreo de FedEx</h5>
            <p class="card-text">Con la función de Rastreo de FedEx, la herramienta ubicada en la parte superior de la
              página te ofrece actualizaciones sobre el envío con un solo clic. Una herramienta diseñada para ofrecer
              velocidad, simplicidad y practicidad. Guarda tus envíos directamente en nuestra página principal, para que
              no tengas que iniciar sesión para averiguar dónde están tus paquetes.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Principales beneficios </h5>
            <p class="card-text">
            <ul class="textito">
              <li>Rastrea tus envíos en tiempo real sin tener que iniciar sesión.</li>

              <li>Obtén actualizaciones con tan solo un clic en la página principal.</li>

              <li>Guarda tus envíos para obtener actualizaciones rápidas prácticamente en tiempo real.</li>

              <li>Mira todos tus envíos en una interfaz simple y clara.</li>

              <li>Crea apodos para nuestra experiencia de búsqueda más simple.</li>
            </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Rastreo móvil de FedEx </h5>
            <p class="card-text">La función de Rastreo de FedEx es nuestra herramienta de rastreo más práctica, ya que
              te brinda actualizaciones mientras te desplazas. De esta manera, puedes mantenerte informado sobre tus
              envíos las 24 horas, los 7 días de la semana y desde cualquier ubicación. Con esta herramienta, tendrás
              todo el poder de Rastreo de FedEx en la palma de tu mano.</p>
          </div>
        </div>
      </div>
      <div class="card tarjet">
        <div class="card-body">
          <h5 class="card-title">Principales beneficios</h5>
          <p class="card-text">
          <ul class="textito">
            <li>Rastrea desde cualquier lugar y en todo momento.</li>
            <li>Sigue tu paquete con un solo clic.</li>
            <li>Mantente actualizado mediante la definición de alertas automáticas.</li>
            <li>Una forma sencilla de hacer rastreos con escaneo de código de barras.</li>
          </ul>
          <a href="https://apps.apple.com/mx/app/fedex/id1010729050" target="_blank">
            <img src="img/Download_on_the_App_Store_Badge.svg.webp" alt="" width="200">&nbsp;&nbsp;
          </a>
          <a href="https://play.google.com/store/apps/details?id=com.fedex.ida.android&hl=es_mx&pli=1" target="_blank">
            <img src="img/get-it-on-google-play-badge.png" alt="" width="200">
          </a>
          </p>
        </div>
      </div>
    </div>
  </div>
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