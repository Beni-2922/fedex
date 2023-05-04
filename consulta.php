<?php

session_start();
include 'conexion.php';

$correo = $_POST['correo'];
$clave = $_POST['clave'];


$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
and clave='$clave' ");

if (mysqli_num_rows($validar_login) > 0 ) {
    $_SESSION['usuarios'] = $correo;
    header("location: index.html");
    exit();

}else {
    echo ' 
    <script>
    alert("El usuario no existe, verifica los datos introducidos");
    window.location = "login.html"
    </script>';
    exit();
}

?>