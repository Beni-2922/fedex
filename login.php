<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header("location: completa_perfil.php");
}

?>
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
  <link rel="stylesheet" href="./css/styles.css">
  <title>FedEx | Login</title>
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
    <!-- FIN NAVEGACION -->
</head>

<body>
<!-- INICIO DE PAGINA -->
        <main>

           <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p> 
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                   </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p> 
                        <button id="btn__registrarse">Regístrarse</button>
                   </div>
                </div> 

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">

                    <!--LOGIN-->
                    <form action="login.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Entrar</button>
                    </form> 

                    <!--REGISTRO-->
                    <form action="registro.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="./js/script.js"></script>

</body>
</html>


