<!DOCTYPE html>
<html lang="en">
<head>
    <title> Galeria </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilosgaleria.css">
    <link rel="stylesheet" href="../css/lightbox.min.css">
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
        <h2> Mejores momentos </h2>
        <p id="text"> </p>
        <script type="text/javascript">
            var i, text;
            i=0;
            text="La música guarda tus mejores recuerdos";
            function escritura(){
                if(i<text.length){
                    document.getElementById("text").innerHTML += text.charAt(i);
                    i++;
                    setTimeout(escritura, 70);
                }
            }
            escritura();
        </script>
    </div>
</section>
<br> <br> <br> <br> <br> <br>
<section class="showcase2">
    <h2 class="titulo">Galería</h2>
    <div class="caja">
        <a href="../pics/galeria1.jpg" data-lightbox="noiseOfLens"><img class="img imgen-1" src="../pics/galeria1.jpg"></a>
        <a href="../pics/galeria2.jpg" data-lightbox="noiseOfLens"><img class="img imgen-2" src="../pics/galeria2.jpg"></a>
        <a href="../pics/galeria3.jpg" data-lightbox="noiseOfLens"><img class="img imgen-3" src="../pics/galeria3.jpg"></a>
        <a href="../pics/galeria4.jpg" data-lightbox="noiseOfLens"><img class="img imgen-4" src="../pics/galeria4.jpg"></a>
        <a href="../pics/galeria5.jpg" data-lightbox="noiseOfLens"><img class="img imgen-5" src="../pics/galeria5.jpg"></a>
        <a href="../pics/galeria6.jpg" data-lightbox="noiseOfLens"><img class="img imgen-6" src="../pics/galeria6.jpg"></a>
        <a href="../pics/galeria7.jpg" data-lightbox="noiseOfLens"><img class="img imgen-7" src="../pics/galeria7.jpg"></a>
        <a href="../pics/galeria8.jpg" data-lightbox="noiseOfLens"><img class="img imgen-8" src="../pics/galeria8.jpg"></a>
        <a href="../pics/galeria9.jpg" data-lightbox="noiseOfLens"><img class="img imgen-9" src="../pics/galeria9.jpg"></a>
        <a href="../pics/galeria10.jpg" data-lightbox="noiseOfLens"><img class="img imgen-10" src="../pics/galeria10.jpg"></a>
    </div>
</section>
<br> <br> <br> <br> <br> <br>
<section>
    <div class="video1">
        <video controls onmouseover="this.play()" src="../pics/galeria_trailer.mp4"> </video>
    </div>
</section>
<section class="bloque2">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2> Best Sellers </h2>
            <!-- Slideshow container -->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="../pics/galeria_slider1.png" style="width:100%">
                    <div class="text"> <a href=""> Queen </a></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="../pics/galeria_slider2.png" style="width:100%">
                    <div class="text"> <a href=""> Thousand Foot Krutch </a></div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="../pics/galeria_slider3.png" style="width:100%">
                    <div class="text"> <a href=""> Avenged Sevenfold </a></div>
                </div>

                <!-- Boton de anterior y siguiente -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- Circulitos para clickar -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </div>
</section>
<script src="../js/lightbox-plus-jquery.min.js"></script>
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