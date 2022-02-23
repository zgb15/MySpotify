<!DOCTYPE html>
<html lang="en">
<head>
    <title> Asistencia </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilosasistencia.css">
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
        <h2>¿En qué podemos ayudarte? </h2>
        <p id="text"> </p>
        <script type="text/javascript">
            var i, text;
            i=0;
            text="Consulta las preguntas frecuentes";
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
                Contacto <i class="fas fa-chevron-right"></i>
            </a>
            <a href="https://www.spotify.com/es/premium/#plans" class="btn2">
                Preguntas frecuentes <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </section>
    <section class="showcase2">
        <h2> Visita la comunidad </h2>
        <p> ¿Tienes alguna pregunta? ¡Encuentra respuestas en nuestra Comunidad mundial de expertos!  </p>
        <div class="botones">
            <a href="https://www.spotify.com/es/purchase/offer/campaign-trial-2m?country=ES" class="btn">
                Encontrar respuestas <i class="fas fa-chevron-right"></i>
            </a>
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