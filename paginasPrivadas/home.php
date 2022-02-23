
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'><link rel="stylesheet" href="privado.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="../js/js.js"> </script>
    <title>home</title>
</head>
<body>
<div class="app">
    <div class="cardList">
        <button class="cardList__btn btn btn--left">
            <div class="icon">
                <svg>
                    <use xlink:href="#arrow-left"></use>
                </svg>
            </div>
        </button>

        <div class="cards__wrapper">
            <div class="card current--card">
                <div class="card__image">
                    <img src="../pics/descargar.jpg" alt="" />
                </div>
            </div>

            <div class="card next--card">
                <div class="card__image">
                    <img src="../pics/subircanciones.jpg" alt="" />
                </div>
            </div>

            <div class="card previous--card">
                <div class="card__image">
                    <img src="../pics/onair.jpg" alt="" />
                </div>
            </div>
        </div>

        <button class="cardList__btn btn btn--right">
            <div class="icon">
                <svg>
                    <use xlink:href="#arrow-right"></use>
                </svg>
            </div>
        </button>
    </div>

    <div class="infoList">
        <div class="info__wrapper">
            <div class="info current--info">
                <h1 class="text name">SUBIR</h1>
                <h4 class="text location">CANCION</h4>
                <p class="text description">Sube tus canciones favoritas</p>
            </div>

            <div class="info next--info">
                <h1 class="text name">DESCARGAR</h1>
                <h4 class="text location">CANCIONES</h4>
                <p class="text description">Descarga tus canciones favoritas</p>
            </div>

            <div class="info previous--info">
                <h1 class="text name">ESCUCHAR</h1>
                <h4 class="text location">PODCATS</h4>
                <p class="text description">Escucha aquí los mejores podcats</p>
            </div>
        </div>
    </div>


    <div class="app__bg">
        <div class="app__bg__image current--image">
            <img src="../pics/descargar.jpg" alt="" />
        </div>
        <div class="app__bg__image next--image">
            <img src="../pics/subircanciones.jpg" alt="" />
        </div>
        <div class="app__bg__image previous--image">
            <img src="../pics/onair.jpg" alt="" />
        </div>
    </div>
</div>

<div class="loading__wrapper">
    <div class="loader--text">Loading...</div>
    <div class="loader">
        <span></span>
    </div>
</div>


<svg class="icons" style="display: none;">
    <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
        <polyline points='328 112 184 256 328 400'
                  style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
    </symbol>
    <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
        <polyline points='184 112 328 256 184 400'
                  style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
    </symbol>
</svg>
<script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script><script  src="privado.js"></script>

</body>
</html>