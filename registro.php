<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];


$query = "INSERT INTO usuarios(nombre,correo,clave)
          VALUES('$nombre','$correo','$clave')";

// CORREO
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo ' 
    <script>
    alert("Este correo ya esta registrado, intenta con otro diferente");
    window.location = "./login.php";
    </script>';
    exit();
}


$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
    alert("usuario almacenado exitosamente");
    window.location = "./index.php";
    </script>';
}else {
    echo '
    <script>
    alert("intentalo de nuevo, usuario no almacenado");
    window.location = "./login.php";
    </script>';
}

mysqli_close($conexion);

?>