<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creditos.php</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                align-items:baseline;
                text-align: center;

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
    <section class="creditos_contenidos">
        <ul>
            <li> <a href="creditos.php?creditos=pl">
                    <h2>Creditos Personales</h2>
                </a></li>
            <li> <a href="creditos.php?creditos=cm">
                    <h2>Creditos Comerciales</h2>
                </a></li>
            <li> <a href="creditos.php?creditos=pr">
                    <h2>Creditos Prendarios</h2>
                </a></li>
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
                $montohasta = "Monto a Financiar hasta $200000. <p>Los requisitos para acceder a la Linea de Creditos en Efectivo son los siguientes:</p>
                <p> 1- Fotografía legible del DNI del solicitante.</p>
                <p> 2- Ultima boleta de servicio público (donde conste domicilio coincidente al que figure en el
                    D.N.I.
                    del solicitante).</p>
                <p> 3- Ultimo recibo de sueldo.</p>
                <p> 4- Numero telefónico del solicitante y de un contacto de referencia (para realizar la llamada de
                    confirmación con el solicitante del crédito).</p>
                <p>Dichas fotografías deben ser remitidas vía WhatsApp al número +543704241007</p>";
                $img = './$200000.png';
                break;

            case 'cm':
                $nombre = "Credito Comercial";
                $CFT = "CFT 200%";
                $montohasta = "Monto a Financiar hasta $1.000.000. Créditos para Comercios CrediMas.
                <p> Adherí tu comercio a CrediMas y accedé a un crédito destinado a capital de trabajo con condiciones muy beneficiosas para tu negocio.</p>
                
                <p>Usuarios:
                Micro, Pequeñas y Medianas Empresas bajo cualquier forma societaria o unipersonal, con 12 meses de inscripción ante la AFIP (*)</p>
                
                <p>Monto máximo:
                Hasta el equivalente a 3 meses de ventas del solicitante, con un máximo de $ 1.000.000.</p>
                
                <p>Plazo:
                Único de 12 meses.</p>
                
                <p>Amortización:
                Mensual por sistema francés o alemán, según corresponda.</p>
                
                <p>Garantía:
                <p> A satisfacción de CrediMas.";
                $img = './7.jpg';
                break;
            case 'pr':
                $nombre = "Credito Prendario";
                $CFT = "CFT 80%";
                $montohasta = "<p>Monto a Financiar hasta $5.000.000.</p>
                <p>Financiación</p>
                <p>¿Qué tipo de auto puedo financiar?</p>
                <p>Automoviles Automóviles y utilitarios hasta 1000kg de carga.</p>
                <p>0km y usados 0km y usados hasta 10 años de antiguedad.</p>
                <p>Uso particular Para uso particular.</p>
                <p>* Condiciones sujetas a aprobación crediticias.</p>";
                $img = './prendario.jpg';
                break;
            default:
                echo "Indicanos en que podemos ayudarte.";
        }
    }
    ?>
    <div class="tipos de creditos">
        <h4> <?php echo $montohasta; ?></h4>
        <h4> <?php echo $CFT ?></h4>;

        <div class="contenedor img">
            <img src="<?php echo $img ?>" alt="">
        </div>
    </div>

</body>
<?php
include ("footer.php");
?>

</html>