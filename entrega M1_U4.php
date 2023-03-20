<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css_entrega M1_U4.css">
    <title>Entrega Obligatoria M1_U4 Prestamos</title>
    <h1>Entrega Obligatoria M1_U4 Prestamos</h1>
</head>

<body>
    <?php
    $fecha_hoy = 20 - 03 - 2023;

    $texto = "Gonzalez Daiana";
    $capital = 150000;
    $cantidad_cuotas = 6;
    $valor_cuota = 50000;
    $fecha_otorgamiento = "01-03-2023";

    $texto_1 = "Duarte Sebastian";
    $capital_1 = 750000;
    $cantidad_cuotas_1 = 12;
    $valor_cuota_1 = 212500;
    $fecha_otorgamiento_1 = "01-02-2023";

    $texto_2 = "Perez Eduardo";
    $capital_2 = 175000;
    $cantidad_cuotas_2 = 3;
    $valor_cuota_2 = 93333.33;
    $fecha_otorgamiento_2 = "01-12-2022";
    ?>
    <section class="contenido">
        <h2 style="color:#FF0000">Resumen Clientes</h2 <?php echo "<br>" ?> <h3><?php echo $texto ?></h3>
        <ul>
            <li> Capital Otorgado: <?php print $capital ?></li>
            <li> Numero de Cuotas: <?php print $cantidad_cuotas ?></li>
            <li> Cuota Mensual: <?php print $valor_cuota ?></li>
            <li> Fecha de Prestamo: <?php print $fecha_otorgamiento ?></li>
        </ul>
        <h3><?php echo $texto_1 ?></h3>
        <ul>
            <li> Capital Otorgado: <?php print $capital_1 ?></li>
            <li> Numero de Cuotas: <?php print $cantidad_cuotas_1 ?></li>
            <li> Cuota Mensual: <?php print $valor_cuota_1 ?></li>
            <li> Fecha de Prestamo: <?php print $fecha_otorgamiento_1 ?></li>
        </ul>
        <h3><?php echo $texto_2 ?></h3>
        <ul>
            <li> Capital Otorgado: <?php print $capital_2 ?></li>
            <li> Numero de Cuotas: <?php print $cantidad_cuotas_2 ?></li>
            <li> Cuota Mensual: <?php print $valor_cuota_2 ?></li>
            <li> Fecha de Prestamo: <?php print $fecha_otorgamiento_2 ?></li>
        </ul>
    </section>
    <section class="promedios">
        <?php $cuotas = array($valor_cuota, $valor_cuota_1, $valor_cuota_2);
        $valorInicial = 0;
        $suma = array_reduce($cuotas, function ($acarreo, $cuotas) {
            return $acarreo + $cuotas;
        }, $valorInicial);
        $cantidadDeElementos = count($cuotas);
        $promedio = $suma / $cantidadDeElementos;
        echo "Cobros promedios de Cuotas Mensuales:";
        echo round($promedio, PHP_ROUND_HALF_UP);
        ?>
        <?php echo "<br>" ?>
        <?php $capital_prestado = array($capital, $capital_1, $capital_2);
        $valorInicial = 0;
        $suma = array_reduce($capital_prestado, function ($acarreo, $capital_prestado) {
            return $acarreo + $capital_prestado;
        }, $valorInicial);
        $cantidadDeElementos = count($capital_prestado);
        $promedio = $suma / $cantidadDeElementos;
        echo "Promedio de Prestamo Otorgado:";
        echo round($promedio, PHP_ROUND_HALF_UP);
        ?>
    </section>
    <div><iframe style="width:320px;height:260px;border-radius:10px;box-shadow:2px 4px 4px rgb(0 0 0 / 25%); float: left ;  border:1px solid #bcbcbc" src="https://dolarhoy.com/i/cotizaciones/dolar-blue" frameborder="0"></iframe></div>
    <div><iframe style="width:320px;height:260px;border-radius:10px;box-shadow:2px 4px 4px rgb(0 0 0 / 25%); float: left ;  border:1px solid #bcbcbc" src="https://dolarhoy.com/i/cotizaciones/dolar-bancos-y-casas-de-cambio" frameborder="0"></iframe></div>
    <div><iframe style="width:320px;height:260px;border-radius:10px;box-shadow:2px 4px 4px rgb(0 0 0 / 25%); float: left ;  border:1px solid #bcbcbc" src="https://dolarhoy.com/i/cotizaciones/dolar-mep" frameborder="0"></iframe></div>
</body>

<?php phpinfo(); ?>

</html>