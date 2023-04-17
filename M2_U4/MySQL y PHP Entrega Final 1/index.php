<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>index</title>
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
            }

            li a {
                display: block;
                padding: 8px;
            }

            img {
                display: block;
                margin: 0 auto;
                max-width: 100%;
            }
        </style>
        <nav class="botonera_principal">
            <ul>CrediMas, Siempre Mas</ul>
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="creditos.php">Creditos</a></li>
                <li> <a href="contacto.php">Contacto</a></li>
                <li> <a href="usuarios.php">Usuarios Registrados</a></li>
                <li> <a href="redessociales.php">Redes Sociales</a></li>
            </ul>
        </nav>
    </head>
    <div>
        <img src="./img/monedas1.jpg" alt="">
    </div>

    <style>
        .columnas {
            display: flex;
        }

        .Bienvenidos {
            width: 75%;
            padding-right: 10px;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            line-height: 20px;
        }

        .Testimonio {
            width: 25%;
            padding-right: 10px;
            box-sizing: border-box;
            background-color: rgb(186, 172, 172);
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            line-height: 20px;
            font-family: cursive;
            text-align: center;
        }
    </style>
    <div class="columnas">
        <div class="Bienvenidos">
            <h2>Bienvenidos</h2>
            <h4>
                Somos una entidad financiera creada en la ciudad de Formosa Capital con el fin de facilitar el
                acceso al consumo
                financiado a todos aquellos pequeños consumidores que no pueden acceder al mercado financiero
                regulado por el BCRA.</h4>
            <h4>
                Iniciamos nuestras operaciones en el mercado financiero formoseño en el año 2.020, y desde entonces
                nuestro
                crecimiento ha sido constante, apoyando en su esfuerzo de desarrollo al sector comercial minorista
                de la Provincia de Formosa.</h4>
            <h4>
                Contamos con personal con amplia experiencia en el sector financiero, lo que nos permite dar
                soluciones en el corto plazo a los requerimientos de nuestros clientes.</h4>
        </div>
        <div class="Testimonio">
            <h2>Testimonios</h2>
            <h4>"Gracias a CrediMas he podido cancelar el pago por el terreno de mi casa".</h4>
            <p>Mareco Gustavo.</p>
            <h4>"Con CrediMas pude comprar los electrodomésticos para mi casa".</h4>
            <p>Andrea Revolero.</p>
        </div>
    </div>

</body>
<?php
include ("footer.php");
?>

</html>