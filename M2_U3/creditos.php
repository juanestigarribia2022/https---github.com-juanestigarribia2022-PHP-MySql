<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creditos.php</title>
    <link rel="stylesheet" href="./estiloscontacto.css">
</head>

<body>

<head>
        <nav class="botonera_principal">
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="creditos.php">Creditos</a></li>
                <li> <a href="contacto.php">Contacto</a></li>
                <li> <a href="usuarios.php">Usuarios Registrados</a></li>
            </ul>
        </nav>
    </head>
    <section class="creditos_contenidos">
        <h1>Clases de Creditos</h1>
        <ul>
            <li> <a href="creditos.php?creditos=pl"><h2>Creditos Personales</h2></a></li>
            <li> <a href="creditos.php?creditos=cm"><h2>Creditos Comerciales</h2></a></li>
            <li> <a href="creditos.php?creditos=pr"><h2>Creditos Prendarios</h2></a></li>
        </ul>
    </section>
    <?php
    $nombre = ' ';
    $CFT = ' ';
    $montohasta = ' ';

    if (isset($_GET['creditos'])) {

        switch ($_GET['creditos']) {
            case 'pl':
                $nombre = "Credito Personal";
                $CFT = "CFT 240%";
                $montohasta = "Monto a Financiar hasta $200000";
                $img = './img/$200000.png';
                break;

            case 'cm':
                $nombre = "Credito Comercial";
                $CFT = "CFT 200%";
                $montohasta = "Monto a Financiar hasta 1000000";
                $img = './img/7.jpg';
                break;
            case 'pr':
                $nombre = "Credito Prendario";
                $CFT = "CFT 80%";
                $montohasta = "Monto a Financiar hasta 5000000";
                $img = './img/shopping-bags.jpg';
                break;
            default:
                echo "Indicanos en que podemos ayudarte.";
        }
    }
    ?>
    <div class="tipos de creditos">
        <h2> <?php echo $nombre; ?></h2>;
        <h3> <?php echo $CFT; ?></h3>;
        <h3> <?php echo $montohasta; ?></h3>

        <div class="contenedor img">
            <img src="<?php echo $img ?>" alt="">
        </div>
    </div>


</body>

</html>