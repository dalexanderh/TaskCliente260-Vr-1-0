<?php

session_start();
if(!isset($_SESSION['usuario'])){

    header("location: Bienvenido.php");
}

?>

<main>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging y Registro</title>
    <link rel="stylesheet" href="stilo/css/Style.css">
</head>

<body>

    <div class="contenedor__todo">

        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿ya tienes una cuenta?</h3>
                <p>iniciar sesion para entrar en la pagina </p>
                <button id="btn__iniciar-sesion">Iniciar sesion</button>

            </div>
            <div class="caja__trasera-register">
                <h3>¿Aun no tienes una cuenta?</h3>
                <p>registrate para que puedad iniciar sesion </p>
                <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>

        <div class="contenedor__login-register">

            <form action="php/login_usuario_be.php" method="POST" class="formulario__login">

                <h2>iniciar sesion</h2>
                <input type="text" placeholder="correo Electronico" name="correo">
                <input type="password" placeholder="contrasena" name="contrasena">
                <button>Entrar</button>


            </form>

            <form action="php/registro_usuario_be.php"method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="contrasena" name="contrasena">
                <button>Registrarse</button>
            </form>
        </div>
    </div>

    <script src="stilo/js/scrip.js"></script>
    
    </main>
</body>

</html>