<?php 
// bucles
//while Utilizando el ciclo WHILE, PHP ejecutará las sentencias anidadas, mientras que la condición o expresión propuesta se evalúe como TRUE
$i = 5;

while ($i <= 10) {
    echo "<br>";
    echo $i++;    
}

//quiero saber si es PAR o IMPAR
echo "<br>";
$numero = 6;
$pares = 0;
$impares = 0;

while ($numero > 0) {
    if ($numero % 2 == 0) {
        echo "El $numero es PAR <br>";
        $pares++;
    }
    else {
        echo "El $numero es un numero IMPAR <br>";
        $impares++;
    }
    $numero --;
}

//DO-WHILE (NO SE USA MUCHO) muy parecidos a los bucles WHILE, con la diferencia que evaluará la condición al FINAL de cada ciclo. Esto nos garantizará que el ciclo se ejecutará POR LO MENOS UNA VEZ
/*do {
sentencia a ejecutar;
} while (condición);
*/

//Bucle FOR con el IF ademas le dice q corte en "5"
for($i = 0; $i <= 10; $i++) {
    echo "HOLA <br>";
    if ($i == 5) {
        break;
    }
}
//Imprimir numeros pares del 2 al 20
for ($i= 2; $i <=20; $i+=2) {
    echo "Hola $i <br>";
}

//Imprimir una tabla de multiplicar 5
for ($i = 1; $i <=10; $i ++) {
echo "8 x " . $i . "=" . (8 * $i) . "<br>";
}

//FOR con array imprime elementos del array
$frutas = array('manzana', 'banana', 'pera', 'limon');

for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas [$i] . "<br>";
}
echo "<br>";
//EJEMPLO
$personas = array (
    array ("nombre" => "Juan", "edad" => "40"),
    array ("nombre" => "Jose", "edad" => "30"),
    array ("nombre" => "Juliam", "edad" => "45"),
    array ("nombre" => "Justo", "edad" => "8")
);
//Imprimir nombre y edad y considerar si es mayor de edad

for ($i = 0; $i <count($personas); $i++) {
    echo "Nombre: " . $personas[$i]["nombre"] . "<br>";
    echo "Edad: " . $personas[$i]["edad"] . "<br>";
 if ($personas[$i]["edad"] >= 18) {
    echo "Estado : Mayor de edad <br><br>";
} else{
    echo "Estado: Menor de edad <br><br>";
}
}