<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/Fedex-Logo-PNG-Clipart.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
  <title>FedEx | Acerca de FedEx</title>
</head>

<body>

  <!---------------------------------Encabezado----------------------------------->
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


  <!-----------------------------Carrusel---------------------------------------->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/201504_15_002_02_04_04_018_dm_160125_919932672.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/61c0fe0d4b86fb00195273d8.webp" class="d-block w-100" style="height:505px;">
      </div>
      <div class="carousel-item">
        <img src="img/2019_FedEx_777_S6A1250-1.jpg" class="d-block w-100" style="height:505px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-----------------------------Carrusel---------------------------------------->


  <section class="banner contenedor">
    <section class="banner_title">
      <div class="card my-3">
        <div class="card-body">
          <h5 class="card-title jump">Objetivo General</h5>
          <p class="card-text">Operar de forma independiente concentrándonos en nuestras redes independientes para
            satisfacer las distintas necesidades de los clientes. Competir de manera colectiva permaneciendo como una
            única marca en todo el mundo y hablando con una única voz.</p>
        </div>
      </div>
      <div class="card my-3">
        <div class="card-body">
          <h5 class="card-title jump">Misión</h5>
          <p class="card-text">FedEx producirá rendimientos económicos superiores para sus accionistas, al proveer
            servicios logísticos de alto valor agregado, así como servicios comerciales y de transportes relacionados a
            través de compañías con operaciones integradas. Se cumplirán los requerimientos de los clientes con la más
            alta calidad y de forma apropiada para cada sector del mercado en el que se opera. La seguridad será la
            primera consideración en todas las operaciones.</p>
        </div>
      </div>
      <div class="card my-3">
        <div class="card-body">
          <h5 class="card-title jump">Visión</h5>
          <p class="card-text">FedEx prefiere contribuir a las necesidades específicas del programa y la sociedad más
            que eventos especiales y organizacionales, se centra en contribuir relaciones a largo plazo con los socios
            locales y con sus clientes.</p>
        </div>
      </div>
    </section>

    <style>
      h2 {
        font-size: 30px;
        background: linear-gradient(#1497be, #1c2aec);
        color: transparent;
        background-clip: text;
        -webkit-background-clip: text;
        -moz-background-clip: text;
        animation: text 5s linear infinite;
        text-align: center;
        margin-top: 10px;
        margin-bottom: 15px;
      }

      #parrafo {
        display: flex;
        justify-content: center;
        margin-left: 55px;
        margin-right: 55px;
      }

      @keyframes text {
        0% {
          filter: hue-rotate(0deg);
        }

        100% {
          filter: hue-rotate(360deg);
        }
      }

      .jump {
        animation-name: jump;
        animation-duration: 1.0s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        font-size: 23px;
      }

      @keyframes jump {
        0% {
          transform: translateY(0);
        }

        50% {
          transform: translateY(-5px);
        }

        100% {
          transform: translateY(0);
        }
      }
    </style>




    <!-- Footer -->
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
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/user/fedex/custom"
            role="button" target="_blank"><i class="fab fa-youtube"></i></a>

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
                  <a href="carta-porte.html" class="text-white">Carta Porte</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Herramientas en línea</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Información sobre el recargo por combustible</a>
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