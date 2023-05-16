<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");
echo date("d/M/y-H-i")."<br>";

$fecha_actual = date("d/F/o");
echo "La fecha actual es: ".$fecha_actual;

$hora_actual = time();
echo ("<h3>$hora_actual</h3>");

$hora_actual2 = getdate();
echo "<h3>".$hora_actual2['hours'].":".$hora_actual2['minutes'].":".$hora_actual2['seconds']."</h3>";

$fecha = '05/08/2023';

$clase_anterior = date('d-m-Y', strtotime('-1 week', strtotime($fecha)));
echo 'La clase anterior fue el dia '.$clase_anterior;
echo "<br>";

$clase_sgte = date('d-m-Y', strtotime('+1 week', strtotime($fecha)));
echo 'La clase siguiente sera el dia '.$clase_sgte;