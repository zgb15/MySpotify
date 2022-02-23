<!DOCTYPE html>
<html lang="en">
<head>
    <title> Descargar </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilosdescargar.css">
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
    <div class="textoCaja">
        <h2> Descargar Spotify </h2>
        <p id="text">  </p>
        <script type="text/javascript">
            var i, text;
            i=0;
            text="Escucha millones de canciones en tu dispositivo";
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
            <a href="https://www.spotify.com/es/premium/#plans" class="btn2">
                Descargar <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>

</section>
<section class="showcase2">
    <h2> Ponles música también a tu móvil y tu tablet. </h2>
    <p> Enlaces de descarga  </p>
    <div class="botones">
        <a href="https://www.spotify.com/es/premium/#plans" class="btn">
            Descargar en otros dispositivos <i class="fas fa-chevron-right"></i>
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