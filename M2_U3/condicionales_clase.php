<?php
//if "si pasa esto, va a suceder aquello"
$numero = 2;
if ($numero > 20) {
    echo "Es mayor a 20";
}
else {
    echo "Es menor a 20";
}
echo"<br>";
echo "Hola, solo para corroborar";

//else if "evalua una clausula mas (comparacion)
/*si A es mayor q B*/
/*si A es igual q B*/
/*si A es menor q B*/
echo"<br>";
$a = 100;
$b = 100;

if($a > $b) {
    echo "A es mayor que B <br>";
}
elseif($a == $b){
    echo "A es igual que B <br>";
}
else{
    echo "A es menor que B <br>";
}

//switch (con signo de : despues de nombrar el CASE y cierra con BREAK cada CASE y todo cierra con DEFAULT donde da un enunciado por defecto)

$postre = "Queso y Dulce";

switch ($postre) {
    case "Chocotorta" :
     echo "Hoy tenemos Chocotorta";
     break;
    
    case "Ricota" :
        echo "Hoy tenemos Tarta de Ricota";
        break;
    case "Canela" :
        echo "Hoy tenemos Roll de Canela";
        break;
    default:
        echo "Hoy tenemos Postre del Dia";    
    }