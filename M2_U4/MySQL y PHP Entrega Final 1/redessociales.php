<!DOCTYPE html>
<html lang="en">

<head>
    <title>Publicaciones en Redes Sociales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Archivos de bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        /* Para el ancho y alto de las imagenes. Modificalo a gusto =)  */
        .carrusel {
            width: 500px;
            height: 600px;
        }

        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            margin-right: auto;
            margin-left: auto;
            max-width: 500px;
            max-height: 500px;
        }

        /* Para los margenes del contendor de las fotos. Podes cambiarle el ancho a gusto tambien! */
        .carousel-control {
            width: 100px;
        }
    </style>
</head>

<body>

    <head>
        <style>
            ul {
                list-style-type: none;
                padding: 0;
                overflow: hidden;
                background-color: hsl(10, 65%, 70%);
                padding: 5px;
                font-weight: 100px;
                margin: 0%;
                font-size: 35px;
                text-align: center;
                align-items: center;
                color: white;
                border: 1px solid #ccc;
                text-decoration: none;
                padding: 2px 7px 2px 7px;
            }

            li {
                float: left;
                align-items: center;
                text-align: center;

            }

            li a {
                display: block;
                padding: 8px;
                align-items: baseline;
                text-align: center;

            }
        </style>
        <nav class="botonera_principal">
            <ul>CrediMas, Siempre Mas</ul>
            <nav class="botonera_principal">
                <ul>
                    <li> <a href="index.php">Home</a></li>
                    <li> <a href="creditos.php">Creditos</a></li>
                    <li> <a href="contacto.php">Contacto</a></li>
                    <li> <a href="usuarios.php">Usuarios Registrados</a></li>
                    <li> <a href="redessociales.php">Redes Sociales</a></li>
                </ul>
            </nav>
    </head>
    <h1>Publicaciones en Redes Sociales</h1>
    <div class="container1">
        <br>
        <div id="carrusel" class="carousel slide" data-ride="carousel">

            <!-- Opcional, bullets abajo para saltar directamente a una foto (si los pones tiene q haber 1 por foto) -->
            <ol class="carousel-indicators">
                <li data-target="#carrusel" data-slide-to="0" class="active"></li>
                <li data-target="#carrusel" data-slide-to="1"></li>
                <li data-target="#carrusel" data-slide-to="2"></li>
                <li data-target="#carrusel" data-slide-to="3"></li>
                <li data-target="#carrusel" data-slide-to="4"></li>
                <li data-target="#carrusel" data-slide-to="5"></li>
                <li data-target="#carrusel" data-slide-to="6"></li>
                <li data-target="#carrusel" data-slide-to="7"></li>
                <li data-target="#carrusel" data-slide-to="8"></li>
            </ol>

            <!-- Contenedor de las fotos -->
            <div class="carousel-inner" role="listbox">

                <!-- Foto 1 -->
                <div class="item active">
                    <img src="./1.jpg">
                </div>

                <!-- Foto 2 -->
                <div class="item">
                    <img src="./2.jpg">
                </div>

                <!-- Foto 3 -->
                <div class="item">
                    <img src="./3.jpg">
                </div>

                <div class="item">
                    <img src="./4.jpg">
                </div>

                <div class="item">
                    <img src="./5.jpg">
                </div>

                <div class="item">
                    <img src="./7.jpg">
                </div>

                <div class="item">
                    <img src="./8.jpg">
                </div>

                <div class="item">
                    <img src="./9.jpg">
                </div>

            </div>

            <!-- Controles para pasar las fotos -->
            <a class="left carousel-control" href="#carrusel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carrusel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</body>
<?php
include("footer.php");
?>

</html>