<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Usuarios</title>
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
                font-weight: 150px;
                margin: 0%;
                font-size: 55px;
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
    <section>

    </section class="usuarios_contenido">
    <style>
         form {
            width: 650px;
            padding: 16px;
            border-radius: 10px;
            margin: auto;
            background-color: #ccc;
            box-sizing: border-box;
        }

        form label {
            width: 72px;
            font-weight: bold;
            display: inline-block;
        }

        form input[type="usuario"],
        form input[type="contraseña"] {
            width: 180px;
            padding: 3px 10px;
            border: 1px solid #f6f6f6;
            border-radius: 3px;
            background-color: #f6f6f6;
            margin: 8px 0;
            display: inline-block;
        }
        form input[type="submit"] {
            width: 100%;
            padding: 8px 16px;
            margin-top: 32px;
            border: 1px solid #000;
            border-radius: 5px;
            display: block;
            color: #fff;
            background-color: #000;
        }

        form input[type="submit"]:hover {
            cursor: pointer;
        }
    </style>
    <form action="enviar_usuarios.php" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" maxlength="50" minlength="2" required class="usuario_input">

        <label for="contraseña">Contraseña</label>
        <input type="text" name="contraseña" maxlength="50" minlength="2" required class="contraseña_input">

        <input type="submit" value="Ingresar">
    </form>
    <?php
    if (isset($_GET['ok'])) {
        echo "<h3>Ingreso con exito </h3>";
    }
    ?>
    <section>
</body>
<?php
include ("footer.php");
?>

</html>