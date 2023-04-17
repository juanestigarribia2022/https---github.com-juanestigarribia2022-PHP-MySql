<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <h1>Funciones en PHP</h1>
    <?php
    function saludar($nombre, $apellido)
    {
        echo "Hola $nombre $apellido";
    }
    saludar("Juan", "Estigarribia");
    ?>

    <h2>Devolver valores de retorno</h2>
    <?php
    echo cuadrado(5);
    echo cuadrado(6);
    function cuadrado($num)
    {
        return $num * $num . "<br>";
    }
    ?>
    <?php
    function numeros () {
        return array(0, 1, 2, 3);
    }
    list($cero, $uno, $dos, $tres) = numeros ();
    echo ("<br>".$cero."-");
    echo ("<br>".$uno."-");
    echo ("<br>".$dos."-");
    echo ("<br>".$tres."-");
    ?>
   <h2></h2> 
</body>

</html>