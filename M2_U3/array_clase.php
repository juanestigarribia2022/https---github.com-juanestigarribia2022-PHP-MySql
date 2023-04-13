<?php
# Arrays en php


//Array indexado

$frutas = array('manzanas', 'naranjas', 'banana', 'uva');
echo "<pre>";
print_r($frutas);
echo "</pre>";

$colores = ["rojo", "verde", "azul", 67];
// echo $colores[2];

echo "<pre>";
var_dump($colores);
echo "</pre>";


array_push($frutas, "durazno");
echo $frutas[4];
echo "<pre>";
print_r($frutas);
echo "</pre>";


//arrays asociativo

$personas = array(
    "nombre" => "Juan",
    "edad" => 35,
    "nacionalidad" => "argentino"
);
echo "<br>";
echo $personas["edad"];

echo "<pre>";
print_r($personas);
echo "</pre>";

//Array muldimensional

$grupo = array(
    array("nombre" => "Juan", "edad" => 35),
    array("nombre" => "Marta", "edad" => 15),
    array("nombre" => "Pedro", "edad" => 17),
    array("nombre" => "Ana", "edad" => 25)

);
echo "<br>";
echo $grupo[0]["nombre"];
echo "<pre>";
var_dump($frutas);
echo "</pre>";
