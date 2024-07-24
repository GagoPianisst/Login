<?php
    // Inicia la sesion para poder usar variables de sesion en la pagina. 
    session_start();
    // Verifica si ya hay una sesion activa con un usuario logeado.
    if(isset($_SESSION['usuario'])){
        // Si hay una sesion activa, redirige al usuario a la pagina de bienvenida.
        header("location: bienvenida.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login y Registro - COMODEL</title>
<!-- Enlaza la fuente de Google Fonts 'Roboto' para el diseño de la pagina -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/estilos.css">
    </head>
    <body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Iniciar sesion para entrar en la pagina</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aun no tienes una cuenta?</h3>
                        <p>Registrate para que puedas iniciar sesion</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>
                </div>

                <div class="contenedor__login-register">
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo_electronico">
                        <input type="password" placeholder="Contraseña" name="contraseña">
                        <button>Entrar</button>
                    </form>

                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo_electronico">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contraseña">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="assets/js/script.js"></script>
    </body>
</html>