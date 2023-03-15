<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
</head>

<body>
    <h1>HOLAAAAAA</h1>
    <?php
    /* Esto es un Simple Comentario*/
    echo "<h2>Helloooo PHP</h2>";
    /*Variables considerar su comilla si es una cadena de caracteres, osea texto*/
    $texto = "PHP + MySql Inicial";
    $numero = 15;
    $arancel = 552.5;
    $fecha = "10-03-2023";

    $texto_2 = "PHP + MySql Intermedio";
    $numero_2 = 19;
    $arancel_2 = 672.5;
    $fecha_2 = "20-05-2023";

    $texto_3 = "PHP + MySql Avanzado";
    $numero_3 = 21;
    $arancel_3 = 714.5;
    $fecha_3 = "09-08-2023";
    $dolar = 372;
    ?>
    <section class="contenido">
        <h3><?php echo $texto ?></h3>
        <ul>
            <li> Costo: <?php print $arancel ?></li>
            <li> Duracion: <?php print $numero ?></li>
            <li> Inicio: <?php print $fecha ?></li>
        </ul>
        <h3><?php echo $texto_2 ?></h3>
        <ul>
            <li> Costo: <?php print $arancel_2 ?></li>
            <li> Duracion: <?php print $numero_2 ?></li>
            <li> Inicio: <?php print $fecha_2 ?></li>
        </ul>
        <h3><?php echo $texto_3 ?></h3>
        <ul>
            <li> Costo: <?php print $arancel_3 ?></li>
            <li> Duracion: <?php print $numero_3 ?></li>
            <li> Inicio: <?php print $fecha_3 ?></li>
        </ul>
    </section>
    <?php
    $duracion_total = $numero + $numero_2 + $numero_3;
    $costo_total = $arancel + $arancel_2 + $arancel_3;
    $costo_total_dolar = $costo_total / $dolar;
    ?>
    <section class="Totales">
        <h3>Totales</h3>
        <ul>
            <li> Duracion Total: <?php echo $duracion_total ?></li>
            <li> Costo Total: <?php echo $costo_total ?></li>
            <li> Costo Total en Dolares Americanos: <?php echo round($costo_total_dolar) ?></li>
        </ul>
    </section>
    <section class="Cotizacion">
        <div><iframe style="width:320px;height:260px;border-radius:10px;box-shadow:2px 4px 4px rgb(0 0 0 / 25%); float: left ;border:1px solid #bcbcbc" src="https://dolarhoy.com/i/cotizaciones/dolar-blue" frameborder="0"></iframe></div>
        <div><iframe style="width:320px;height:260px;border-radius:10px;box-shadow:2px 4px 4px rgb(0 0 0 / 25%); float: left ;border:1px solid #bcbcbc" src="https://dolarhoy.com/i/cotizaciones/dolar-bancos-y-casas-de-cambio" frameborder="0"></iframe></div>
        <div><iframe style="width:320px;height:260px;border-radius:10px;box-shadow:2px 4px 4px rgb(0 0 0 / 25%); float: left ;border:1px solid #bcbcbc" src="https://dolarhoy.com/i/cotizaciones/dolar-mep" frameborder="0"></iframe></div>

    </section>
</body>

</html>