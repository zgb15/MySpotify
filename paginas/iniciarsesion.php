<!DOCTYPE html>
<html lang="en">
<head>
    <title> Iniciar Sesión </title>
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
            <form action="../loginClases/validar.php" method="POST" id="form">
                <div class = "form">
                    <h1> Iniciar Sesión </h1>
                    <div class="grupo">
                        <input type="email" name="email" id="email" required> <span class="barra"> </span>
                        <label> Email </label>
                        <p id="respuestaEmail"> </p>
                    </div>
                    <div class="grupo">
                        <input type="password" name="password" id="password" required> <span class="barra"> </span>
                        <label> Contraseña </label>
                        <p id="respuestaPassword"> </p>
                        <p id="respuestaCorrecta"> </p>
                    </div>
                    <button type="submit" onclick="validarPassword()"> Enviar </button>
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