<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creditos.php</title>
    <link rel="stylesheet" href="./estilos.css">
</head>

<body>

    <head>
        <nav class="botonera_principal">
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="creditos.php">Creditos</a></li>
            </ul>
        </nav>
    </head>
    <section class="creditos contenidos">
        <H2>Clases de Creditos</H2>
        <ul>
            <li> <a href="creditos.php?personal=pl">Creditos Personales</a></li>
            <li> <a href="creditos.php?comercial=cm">Creditos Comerciales</a></li>
            <li> <a href="creditos.php?prendario=pr">Creditos Prendarios</a></li>
        </ul>
    </section>
    <?php
    if (isset($_GET['creditos'])) {

        switch ($_GET['creditos']) {
            case 'pl':
                $nombre = "Personal";
                $CFT = "CFT 240%";
                $montohasta = "$200.000";
                break;

            case 'cm':
                $nombre = "Comercial";
                $CFT = "CFT 200%";
                $montohasta = "$1.000.000";
                break;
            case 'pr':
                $nombre = "Prendario";
                $CFT = "CFT 80%";
                $montohasta = "$5.000.000";
                break;
            default:
                echo "Indicanos en que podemos ayudarte.";
        }
    }
    ?>
    <div class="tipos de creditos">
        <h2> <?php echo $nombre; ?></h2>
        <h3> <?php echo $CFT; ?></h3>
        <h3> <?php echo $montohasta; ?></h3>
    </div>


</body>

</html>