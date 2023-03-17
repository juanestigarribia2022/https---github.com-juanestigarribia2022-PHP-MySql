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
    <?php
    define ('SALUDO' , 'Hola Nuevamente');
    echo SALUDO;
    echo "<br>";
    const PI = 3.1416;
    echo PI;
    //ARRAY
    define ('COLORES' , array('azul', 'negro', 'rojo'));
    echo "<br>";
    echo COLORES [1];

    const COLORES2 = array('blanco', 'violeta', 'amarillo');
    echo"<br>";
    echo COLORES2[2];

    //Constantes predefinidas ejemplos 
    echo"<br>";
    echo PHP_INT_MAX;
    echo"<br>";
    echo PHP_VERSION_ID;
    echo"<br>";
    echo PHP_INT_MIN;
    echo"<br>";
    echo PHP_FLOAT_MAX;
    echo"<br>";
    echo PHP_FLOAT_MIN;


    //Operadores
    //aritmeticos
    $a = 1;
    $b = 2;
    echo"<br>";
    echo $a + $b;//suma
    echo"<br>";
    echo $a - $b;//resta
    echo"<br>";
    echo $a * $b; // multiplicacion
    echo"<br>";
    echo $a / $b; // division
    echo"<br>";
    echo $a % $b;// resto de la division de A entre B
    echo"<br>";
    echo $a++;//incrementar la variable A en 1
    echo $a--;//disminuye la variable A en 1
    
    //de comparacion
    echo"<br>";
    echo $a < $b; //compara si A es menor que B (se puede hacer lo mismo con MAYOR a B)
    echo"<br>";
    echo $a <= $b; //compara si A es menor-igual que B (se puede hacer lo mismo con MAYOR IGUAL a B)
    echo"<br>";
    echo $a == $b; //compara si A es igual a B (debe llevar dos signos = para realizar la comparacion)
    echo"<br>";
    echo $a === $b; //compara si A es igual a B en TIPO Y VALOR (debe llevar 3 signos = y comparar tanto el valor absoluto como el tipo de entrada)
    echo"<br>";
    echo $a != $b; //compara si A es diferente a B (debe llevar dos signos = para realizar la comparacion)
    echo"<br>";
    echo $a !== $b; //compara si A es diferente a B en TIPO Y VALOR (debe llevar 3 signos = y comparar tanto el valor absoluto como el tipo de entrada)

    //Operadores Logicos
    echo"<br>";
    echo $a and $b; // se consulta si A y B son cierto (tb se puede reemplazar el AND con &)
    echo"<br>";
    echo $a or $b; // se consulta si A o B son cierto
    echo"<br>";
    ?>

    <section class="Cotizacion">
        <div><iframe style="width:320px;height:260px;border-radius:10px;box-shadow:2px 4px 4px rgb(0 0 0 / 25%); float: left ;border:1px solid #bcbcbc" src="https://dolarhoy.com/i/cotizaciones/dolar-blue" frameborder="0"></iframe></div>
        <div><iframe style="width:320px;height:260px;border-radius:10px;box-shadow:2px 4px 4px rgb(0 0 0 / 25%); float: left ;border:1px solid #bcbcbc" src="https://dolarhoy.com/i/cotizaciones/dolar-bancos-y-casas-de-cambio" frameborder="0"></iframe></div>
        <div><iframe style="width:320px;height:260px;border-radius:10px;box-shadow:2px 4px 4px rgb(0 0 0 / 25%); float: left ;border:1px solid #bcbcbc" src="https://dolarhoy.com/i/cotizaciones/dolar-mep" frameborder="0"></iframe></div>

    </section>
</body>

</html>