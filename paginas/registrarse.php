<?php
// print_r($_POST);
include "../registroClases/persona.php";
include "../registroClases/bd.php";

if(isset($_POST) && !empty($_POST)){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $persona = new persona($nombre,$email,$password);
    $persona->insertarUsuario();

  //  $persona->validarAlta();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Registrarse </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/estilosregistrarse.css">
        <script src="../js/js.js"> </script>
    </head>
    <body>
    <header>
        <?php
        include "../includes/header.php";
        ?>
    </header>
        <br>
        <section>
            <div id="formulario">
                <form action="" method="POST" id="form">
                    <div class = "form">
                        <h1> Registrarse </h1>
                        <div class="grupo">
                            <input type="text" name="nombre" id="name" required> <span class="barra"> </span>
                            <label> Nombre </label>
                            <p id="respuestaNombre"> </p>
                        </div>
                        <div class="grupo">
                            <input type="email" name="email" id="email" required> <span class="barra"> </span>
                            <label> Email </label>
                        </div>
                        <div class="grupo">
                            <input type="password" name="password" id="password" required> <span class="barra"> </span>
                            <label> Contraseña </label>
                            <p id="respuestaPassword"> </p>
                            <p id="respuestaCorrecta"> </p>
                        </div>
                        <button type="button" onclick="validarPassword()"> Enviar </button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer Links -->
        <div class="footer-links">
            <div class="footer-container">
                <ul>
                    <li>
                        <a href="#">
                            <h3>EMPRESA</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">Acerca de </a>
                    </li>
                    <li>
                        <a href="#">Empleo</a>
                    </li>
                    <li>
                        <a href="#">For the Record</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <h3>COMUNIDADES</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">Para artistas</a>
                    </li>
                    <li>
                        <a href="#">Desarrolladores</a>
                    </li>
                    <li>
                        <a href="#">Publicidad</a>
                    </li>
                    <li>
                        <a href="#">Inversores</a>
                    </li>
                    <li>
                        <a href="#">Proveedores</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <h3>ENLACES ÚTILES</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">Asistencia</a>
                    </li>
                    <li>
                        <a href="#">Reproductor web</a>
                    </li>
                    <li>
                        <a href="#">App gratis para móvil</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <h3>SABER MÁS</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">Asistencia</a>
                    </li>
                    <li>
                        <a href="#">Reproductor web</a>
                    </li>
                    <li>
                        <a href="#">App gratis para móvil</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <h3>Spotify</h3>
        </footer>
    </body>
</html>