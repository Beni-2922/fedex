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
    <title>FedEx | Herramientas en línea</title>
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
    <nav>
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

    <!--<div class="container responsive-container">
      <div class="container">
          <div class="col-md-4">
            <select class="form-select" id="filter-select">
              <option value="all">Todos</option>
              <option value="red">Rojo</option>
              <option value="blue">Azul</option>
              <option value="green">Verde</option>
            </select>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary" id="btn-all">Todos</button>
                <button type="button" class="btn btn-primary" id="btn-red">Rojo</button>
                <button type="button" class="btn btn-primary" id="btn-blue">Azul</button>
                <button type="button" class="btn btn-primary" id="btn-green">Verde</button>
              </div>
            </div>
      </div>
    </div>
  </div>-->
    <div class="btn-group container">
        <button id="btn-all" type="button" class="btn btn-primary"><span>Categorías</span></button>
        <button id="btn-envio" type="button" class="btn btn-danger"><span>Herramientas de envío</span></button>
        <button id="btn-gestion" type="button" class="btn btn-primary"><span>Herramientas para la gestión de
                cuenta</span></button>
        <button id="btn-soluciones" type="button" class="btn btn-success"><span>Soluciones de envío
                integradas</span></button>
        <button id="btn-aduana" type="button" class="btn btn-warning"><span>Herramientas de aduana</span></button>
        <button id="btn-rastreo" type="button" class="btn btn-info"><span>Herramientas de rastreo</span></button>
    </div>
    <div id="info" style="display: none;">
        <h3></h3>
        <p></p>
    </div>



    <!-- Contenido relacionado con cada botón -->
    <div class="container">

        <div id="contenido-envio" style="display: none;">
            <h3>Envío</h3>
            <p>El envío con FedEx es rápido y sencillo. Contamos con soluciones que se adaptan a cada estilo de vida,
                negocio y entorno laboral. Ya sea que estés en movimiento, en tu oficina o en un entorno de ritmo
                rápido,
                tenemos la herramienta adecuada para tu negocio.</p>
        </div>

    </div>

    <div id="contenido-gestion" style="display: none;">
        <h3>Preferencias de la cuenta </h3>
        <p>Ve y haz cambios en tu perfil de FedEx. Accede a todas las facturas
            la información de elaboración de pagos y mantén tus preferencias de correo electrónico actualizadas.</p>
    </div>
    <div id="contenido-soluciones" style="display: none;">
        <h3>Soluciones de envío integradas</h3>
        <p>Integra tus sistemas comerciales, tu tienda web minorista o tu sistema de administración de pedidos con FedEx Web Services, una solución de API que te permite conectar tus sistemas a FedEx para crear etiquetas de envío, facilitar devoluciones, rastrar envíos, obtener presupuestos y generar informes.</p>
    </div>
    <div id="contenido-aduana" style="display: none;">
        <h3>Herramientas de aduana</h3>
        <p>Encuentra, completa y envía tus documentos de aduana en línea. Nuestras herramientas te ayudarán a preparar y
            enviar la documentación de aduana correcta cada vez.</p>
        <div id="contenido-rastreo" style="display: none;">
            <h3>Rastreo </h3>
            <p>Recibe visibilidad sobre el estado de su envío desde el origen hasta el destino, todos los días, todo el
                día, con nuestras herramientas de rastreo en línea.</p>
        </div>
        <!-- Contenedor del contenido relacionado -->
        <div id="contenido">
            <div id="info">
                <h2 id="titulo"></h2>
                <p id="texto"></p>
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
            <section class="responsive-container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 justify-content-center">
                        <p class="text-uppercase">Información de la compañía</p>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="acercadefedex.html" class="text-white seccion-ancla">Acerca de FedEx</a>
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
                                <a href="#!" class="text-white seccion-ancla">Carta Porte</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white seccion-ancla">Herramientas en línea</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white seccion-ancla">Información sobre el recargo por
                                    combustible</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html" class="text-white seccion-ancla">Aviso de Privacidad</a>
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
    <script src="js/main.js"></script>
</body>

</html>