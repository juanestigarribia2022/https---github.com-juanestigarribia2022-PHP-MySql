<?php
//array indexados
$frutas = array('manzanas', 'naranjas', 'banana', 'uva');

echo $frutas[0] . "<br>";

$colores = array('rojo', 'azul', 'verde', 'amarillo');

echo $colores[1] . "<br>";

//ingresar datos a un array ya manifestado con "push"
array_push($frutas, "durazno");
echo $frutas[4] . "<br>";
echo "<pre>";
print_r($frutas);
echo "</pre>";

//array asociativos (uno le asocia/asigna el indice de referencia)
$personas = array("nombre" => "Juan", "edad" => 35, "nacionalidad" => "argentino");
echo $personas["edad"] . "<br>";


//array multidimensional (array que contiene uno o mas array internamente)
$grupo = array(
    array("nombre" => "Juan", "edad" => 35),
    array("nombre" => "Marta", "edad" => 15),
    array("nombre" => "Pedro", "edad" => 17),
    array("nombre" => "Ana", "edad" => 25)
);
echo $grupo [0] ["nombre"]. "<br>";

//Imprimir todo la info del array
$frutas = array('manzanas', 'naranjas', 'banana', 'uva');
echo "<pre>";
print_r($frutas);
echo "</pre>";

//imprimir con VAR_DUMP que me muestra el "tipo de dato"
$frutas = array('manzanas', 'naranjas', 'banana', 'uva');
echo "<pre>";
var_dump($frutas);
echo "</pre>";