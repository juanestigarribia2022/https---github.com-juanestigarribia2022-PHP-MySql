<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 4</title>
</head>

<body>
    <?php
    $fecha_actual = date("l/M/Y");
    echo "La fecha actual es " . $fecha_actual;
    $texto = "<h3> Nombre " . $_POST['nombre'] .
     "Apellido " . $_POST['apellido'] ."</h3>" .
     "<p> Comentario: " . $_POST['msj'] . "</p>" . 
      "<h5>" ." Fecha de comentario: " . $fecha_actual ."</h5>";

    $archivo = fopen('ejemplo.txt', 'a');
    fputs($archivo, $texto);

    echo "<p> Datos almacenados </p>";

    ?>
</body>

</html>