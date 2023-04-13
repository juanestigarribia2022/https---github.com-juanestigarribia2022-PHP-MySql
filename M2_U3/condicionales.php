<?php

//if

$numero = 15;
if ($numero > 20) {
    echo "Es mayor a 20 <br>";
} else {
    echo "Es menor a 20  <br>";
}

echo "Hola mundo <br>";

//else if

/* " a es mayor que b "
" a es igual que b "
" a es menor que b "

*/


$a = 60;
$b = 60;


if ($a > $b) {
    echo "a es mayor que b <br>";
} elseif ($a == $b) {
    echo "a es igual que b <br>";
} else {
    echo "a es menor que b <br>";
}


// Switch

$postre = "mmmmm";

switch ($postre) {
    case "Chocotorta":
        echo "Hoy tenemos Chocotorta";
        break;
    case "Ricota":
        echo "Hoy tenemos Tarta de Ricota";
        break;
    case "Canela":
        echo "Hoy tenemos Roll de canela";
        break;
    default: 
    echo "Medialunas";
}
