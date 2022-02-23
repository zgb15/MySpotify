<!DOCTYPE html>
<html lang="en">
<head>
    <title> FEELTHEMUSIC </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/js.js"> </script>

</head>
<body>
    <header>
        <?php
        include "../includes/header.php";
        ?>
    </header>
    <!-- SHOWCASE -->
    <section class="showcase">
        <h2>Escuchar lo es todo</h2>
        <p id="text"></p>
        <script type="text/javascript">
            var i, text;
            i=0;
            text="Millones de canciones y pódcast. No hace falta tarjeta de crédito.";
            function escritura(){
                if(i<text.length){
                    document.getElementById("text").innerHTML += text.charAt(i);
                    i++;
                    setTimeout(escritura, 70);
                }
            }
            escritura();
        </script>
        <a href="descargar.php" class="btn">
            Descargar Spotify Gratis <i class="fas fa-chevron-right"></i>
        </a>
    </section>
    <br>
    <!-- Footer Links -->
    <?php
    include "../includes/footer.php";
    ?>
    </body>
</html>