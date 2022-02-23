<!DOCTYPE html>
<html lang="en">
<head>
    <title> Premium </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilospremium.css">
    <script src="../js/js.js"> </script>
</head>
<body>
    <header>
        <?php
        include "../includes/header.php";
        ?>
    </header>
    <br>
    <section class="showcase">
        <h2>Disfruta de 2 meses de </h2>
        <h2> Premium gratis </h2>
        <div id="text">

        </div>
        <script type="text/javascript">
            var i, text;
            i=0;
            text="Después, solo 9,99 €/mes. Cancela cuando quieras.";
            function escritura(){
                if(i<text.length){
                    document.getElementById("text").innerHTML += text.charAt(i);
                    i++;
                    setTimeout(escritura, 70);
                }
            }
            escritura();
        </script>
        <div class="botones">
            <a href="https://www.spotify.com/es/purchase/offer/campaign-trial-2m?country=ES" class="btn">
                Empezar <i class="fas fa-chevron-right"></i>
            </a>
            <a href="https://www.spotify.com/es/premium/premium.php#plans" class="btn2">
                Ver planes <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </section>
    <section class="showcase2">
        <h2> ¿Por qué pasarte a Premium? </h2>
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