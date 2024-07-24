<?php

session_start();

include 'conexion_be.php';

$correo_electronico = $_POST['correo_electronico'];
$contraseña = $_POST['contraseña'];


$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico='$correo_electronico' and contraseña='$contraseña' ");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo_electronico;
    header("Location: ../bienvenida.php");
    exit;
}else{
    echo '
        <script>
            alert("Usario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
        </script>
    ';
    exit;
}

?>