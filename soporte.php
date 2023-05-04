<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/fx-favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="./css/style.css">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="./css/styles.css">
  <title>FedEx | Soporte</title>
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


 <center> <form action="https://formsubmit.co/l19200219@pachuca.tecnm.mx" class="form" method="POST"> 
    <h2>Envie su formulario</h2>
    
    <div class="form_container">
      <div class="form_group">
      <label for= "Nombre" class="form_label">Nombre</label>
      <input type="text" name="name" class="form_input" placeholder=" " required>
      <span class="form_line"></span>
      </div>
    
      <div class="form_group">
      <label for= "email" class="form_label">Correo Electronico</label>
      <input type= "email" name="email" class="form_input" placeholder=" " required>
      <span class="form_line"></span>
      </div>
    
      <div class="form_group">
      <label for="subject" class="form_label">Asunto</label>
      <input type="text" name="tittle" class="form_input" placeholder=" " required>
      <span class="form_line"></span>
      </div>
    
    
      <div class="form_group">
      <label for="comments" class="form_label">Mensaje</label>
      <textarea name="message" cols="15" rows="5" class="form_input" placeholder=" " required></textarea>
      <span class="form_line"></span>
      </div>
      
      <input type="submit" class="form_submit" value="Enviar">
    
      <input type="hidden" name="_next" value="https://seminario.xn--benitopeaaragon-5qb.online/soporte.php">
      <input type="hidden" name="_template" value="table">
      <input type="hidden" name="_autoresponse" value="ESTA ES UNA RESPUESTA AUTOMATICA. 
      Hemos recibido tu correo satisfactoriamente, gracias por comunicarte con nosotros.">
        </form> 
    </div>
     </center>
     <br>
     <br>

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