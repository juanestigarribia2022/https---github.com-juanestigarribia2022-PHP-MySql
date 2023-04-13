<?php
//Bucles
//While
/*
$i = 2;

while ($i <= 10 ){
    echo "<br>";
    echo $i++;
}


$numero = 6;
$pares = 0;
$impares= 0;


while ($numero > 0){
    if ($numero % 2 == 0){
        echo " El $numero es un número PAR <br>";
        $pares++;
    }
    else { 
        echo "El $numero es un número IMPAR <br>";
        $impares++;
    }
    $numero--;
}


//Bucle FOR

for($i = 0; $i <=10;  $i++){
    echo "Hola <br>";
    if ($i == 5 ){
        break;
    }
} 

// Imprimir números pares del 2 al 20

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

// Imprimir tabla de multiplicar 5


$numero = 5;
for ($i = 1; $i <= 10; $i++) {
    echo "$numero x " . $i . "=" . ($numero * $i) ."<br>";
}
*/

// Imprimir elementos de un array

$frutas = array('manzanas', 'naranjas', 'banana', 'uva');

for($i= 0; $i < count($frutas); $i++){
    echo $frutas[$i] . "<br>";
}


$personas = array(
    array("nombre" => "Juan", "edad" => 35),
    array("nombre" => "Marta", "edad" => 15),
    array("nombre" => "Pedro", "edad" => 17),
    array("nombre" => "Ana", "edad" => 25)

);

//Imprimir nombre y edad y evaluamos si es mayor de edad

for($i = 0; $i  <count($personas); $i++){
    echo "Nombre: " . $personas[$i]["nombre"] . "<br>";
    echo "Edad: " . $personas[$i]["edad"] . "<br>";

    if ($personas[$i]["edad"] >= 18 ){
        echo "Estado: Mayor de edad <br><br>";
    } else{
        echo "Estado: menor de edad <br><br>";
    }

}